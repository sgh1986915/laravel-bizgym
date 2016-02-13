<?php

use Saas\Acl\Annotations\AclMap;
use Illuminate\Support\Collection;

/**
 * Auth controller
 *
 * @AclMap(name="auth")
 */

class AuthController extends BaseController 
{
	/**
	 * Login
	 *
	 * @AclMap(	name="auth_login_page",
	 *			config={"only":"guest"},
	 *			insufficient_message="acl.login",
	 *			redirect={"type":"to","path":"/"})
	 */
	public function actionLogin() 
	{
		$this->viewData = array(
			'title' => 'Sign In',
			'auth_type' => 'sign-in',
		);

		if (Request::instance()->getMethod() == 'POST' || Session::has('tmp_login')) {

			Input::flash();

			$validator = Validator::make(Input::all(), array(
				'email' => 'required|email',
				'password' => 'required',
			));

			if ($validator->fails()) {
				// Initial validation failed...
				$error = $validator->messages()->first();
			} else {
				// Initial validation success, continue...
				try
				{
					// Find the user using the login credential
					$email = Input::get('email', Session::get('tmp_login'));
					$remember = (bool) Input::get('remember');
					$user = Sentry::findUserByLogin($email);

					// Check the password, dont get silly!
					if ( ! $user->checkPassword(Input::get('password'))) {
						$error = 'Incorrect password';
					} else {
						// Log the user in
						$email = $user->email;
						$password = Input::get('password');

						$user = Sentry::authenticate(compact('email','password'), $remember);

						// If it has connection, attach it
						if (Session::has('connection')) {
							$provider = Session::get('connection.type');
							$data = new Collection(Session::get('connection.data'));
							$connection = SocialConnection::create(array(
								'user_id' => $user->id,
								'provider' => $provider,
								'provider_uid' => $data->get('id'),
								'provider_username' => $data->get('username', $data->get('screen_name')),
								'name' => $data->get('name'),
								'data' => serialize($data->all()),
							));

							Session::forget('connection');
						}

						return Redirect::intended('/');
					}
				}
				catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
				{
					$error = 'Login field is required.';
				}
				catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
				{
					Session::flash('activation', $user->email);
					
					$error = 'User not activated.';
				}
				catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
				{
					$error = 'User not found.';
				}
				catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
				{
					$throttle = Sentry::findThrottlerByUserId($user->id);

					$time = $throttle->getSuspensionTime();

					$error = "User is suspended for [$time] minutes.";
				}
				catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
				{
					$error = 'User is banned.';
				}
			}

			// Populate any errors
			if (isset($error)) {
				Session::flash('auth_errors', $error);

				return Redirect::route('auth_login');
			}
		}

		$this->setupLayout();
	}

	/**
	 * Logout
	 *
	 * @AclMap(	name="auth_logout",
	 *			config={"except":"banned,guest"},
	 *			insufficient_message="acl.logout",
	 *			redirect={"type":"to","path":"/"})
	 */
	public function actionLogout() 
	{
		if (Auth::check()) {
			Auth::logout();

			return Redirect::to('/');
		}
	}

	/**
	 * Register
	 *
	 * @AclMap(	name="auth_register_page",
	 *			config={"only":"guest"},
	 *			insufficient_message="acl.register",
	 *			redirect={"type":"to","path":"/"})
	 */
	public function actionRegister() 
	{
		if (Session::has('tmp_register')) {
			// Someone is trying to repeat registration
			// after sucessfully registered.
			// Well, its odd, but it happens sometime,
			// fortunately, we still remember if they do so
			return Redirect::route('auth_activate_resend', Session::get('tmp_register'));
		}

		$this->viewData = array(
			'title' => 'Register',
			'auth_type' => 'sign-up',
		);

		if ($provider = Session::get('provider')) {
			// Someone is trying to register using their social account
			// get the data
			$socialData = Session::get('connections.'.$provider);
			Session::put('connection', array('type' => $provider, 'data' => $socialData));

			if (Session::has('tmp_login')) {
				$this->viewData['email'] = Session::get('tmp_login');
			}
		}

		if (Request::instance()->getMethod() == 'POST') {

			Input::flash();

			$validator = Validator::make(Input::all(), array(
				'email' => 'required|email',
				'password' => 'required|min:5',
			));

			if ($validator->fails()) {
				$error = $validator->messages()->first();
			} else {

				try
				{
					// Let's register a user.
					$user = Sentry::register(array(
						'email'    => Input::get('email'),
						'password' => Input::get('password'),
					));

					// If it has connection, attach it
					if (Session::has('connection')) {
						$provider = Session::get('connection.type');
						$data = new Collection(Session::get('connection.data'));
						$connection = SocialConnection::create(array(
							'user_id' => $user->id,
							'provider' => $provider,
							'provider_uid' => $data->get('id'),
							'provider_username' => $data->get('username', $data->get('screen_name')),
							'name' => $data->get('name'),
							'data' => serialize($data->all()),
						));

						Session::forget('connection');
					}

					Event::fire('auth.register', $user);

					AccountMailer::factory($user)->sendActivation();
					Session::flash('activation', $user->email);

					// mark completes flow
					Session::put('tmp_register', $user->email);

					return Redirect::route('auth_activate')->with('message', 'Registration success');
				}
				catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
				{
					$error = 'Login field is required.';
				}
				catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
				{
					$error = 'Password field is required.';
				}
				catch (Cartalyst\Sentry\Users\UserExistsException $e)
				{
					$error = 'User with this login already exists.';

					if (($user = Sentry::findUserByLogin(Input::get('email')))
						&& ! $user->activated)  {
						Session::flash('activation', Input::get('email'));
					}
				}
			}

			// Populate any errors
			if (isset($error)) {
				Session::flash('auth_errors', $error);

				return Redirect::route('auth_register');
			}
		}

		$this->setupLayout();
	}

	/**
	 * Forgot
	 *
	 * @AclMap(	name="auth_forgot_page",
	 * 			config={"only":"guest"},
	 * 			insufficient_message="acl.login",
	 * 			redirect={"type":"to","path":"/"})
	 */
	public function actionForgot() 
	{
		$this->viewData = array(
			'title' => 'Password Request',
			'auth_type' => 'forgot-password',
		);

		if (Request::instance()->getMethod() == 'POST') {

			Input::flash();

			$validator = Validator::make(Input::all(), array(
				'email' => 'required|email',
			));

			if ($validator->fails()) {
				$error = $validator->messages()->first();
			} else {

				try {
					$email = Input::get('email');
					$user = Sentry::findUserByLogin($email);

					AccountMailer::factory($user)->sendPasswordRequest();
				} catch (Exception $e) {
					$error = 'User not found';
				}
			}

			// Populate any errors
			if (isset($error)) {
				Session::flash('auth_errors', $error);
			}

			return Redirect::route('auth_forgot');
		}

		$this->setupLayout();
	}

	/**
	 * Reset
	 *
	 * @AclMap(	name="auth_reset_page",
	 *			config={"only":"guest"},
	 *			insufficient_message="acl.login",
	 *			redirect={"type":"to","path":"/"})
	 */
	public function actionReset($token = '') 
	{
		$this->viewData = array(
			'title' => 'Reset Password',
			'auth_type' => 'forgot-password',
			'token' => $token,
			'email' => Input::has('email') ? Input::get('email') : Session::get('password_reset_email'),
		);

		if (Input::has('email') && Input::has('_token')) {
			Input::flash();
			Session::flash('password_reset_email', Input::get('email'));

			$email = Input::get('email');
			$password = Input::get('password');
			$password_confirmation = Input::get('password_confirmation');

			$validator = Validator::make(Input::all(), array(
				'password' => 'required|confirmed',
			));

			if ($validator->fails()) {
				$email = Input::get('email');
				$error = $validator->messages()->first();

				return Redirect::to(URL::route('auth_reset', $token).'?email='.$email)->with('warning', $error);
			} else {
				return Password::reset(compact('email'), function($user, $password)
			    {
			    	if ($user::getHasher() === null) {
			    		$user::setHasher(app('sentry.hasher'));
			    	}

			    	try {
			    		$user->attemptResetPassword(null, $password);
			    	} catch (Exception $e) {
			    		throw $e;
			    	}

			        return Redirect::route('auth_login')->with('message', 'Password reset success');
			    });
			}
		}

		$this->setupLayout();
	}

	/**
	 * Activate
	 *
	 * @AclMap(	name="auth_activate_page",
	 *			config={"only":"guest"},
	 *			insufficient_message="acl.login",
	 *			redirect={"type":"to","path":"/"})
	 */
	public function actionActivate() 
	{
		if (Input::has('email') && Input::has('code')) {
			try {
				$user = Sentry::findUserByLogin(Input::get('email'));

				// Let's get the activation code
				$activationCode = Input::get('code');

				// Attempt to activate and log the user in
				$user->attemptActivation($activationCode);
				Sentry::login($user, $remember);

				return Redirect::intended('/')->with('message', 'Your account now active');

			} catch (Cartalyst\Sentry\Users\UserAlreadyActivatedException $e) {
				return Redirect::intended('/');
			} catch (Exception $e) {
				throw $e;
			}
		}

		if (Session::has('process_activation') && Session::has('activation')) {
			try {
				$user = Sentry::findUserByLogin(Session::get('activation'));
				AccountMailer::factory($user)->sendActivation();
			} catch (Exception $e) {
				throw $e;
			}
		}

		$this->viewData = array(
			'title' => 'Activate your account',
			'auth_type' => 'forgot-password'
		);

		$this->setupLayout();
	}

	/**
	 * Resend activation
	 *
	 * @AclMap(	name="auth_reactivate_page",
	 *			config={"only":"guest"},
	 *			insufficient_message="acl.login",
	 *			redirect={"type":"to","path":"/"})
	 */
	public function actionReactivate($email) 
	{
		try {
			$user = Sentry::findUserByLogin($email);
			Session::flash('process_activation', true);
			Session::flash('activation', $user->email);

			return Redirect::route('auth_activate');
		} catch (Exception $e) {
			throw $e;
		}
	}

	/**
	 * Disconnect handler
	 *
	 * @AclMap(	name="auth_disconnect_page",
	 *			config={"only":"user"},
	 *			insufficient_message="acl.logout",
	 *			redirect={"type":"to","path":"/"})
	 */
	public function actionDisconnect($provider) 
	{
		// Findout if current result is already within database
		$social = Auth::user()->socialConnections()->where('provider', '=', $provider)->first();

		if ($social) {
			$social->delete();
		}

		return Redirect::to('/')->with('message', ucfirst($provider).' Disconected');
	}

	/**
	 * Connect handler
	 *
	 * @AclMap(	name="auth_connect_page",
	 *			config={"except":"banned"},
	 *			insufficient_message="acl.banned",
	 *			redirect={"type":"to","path":"/"})
	 */
	public function actionConnect($provider) 
	{
		try {
			$scopes = ($provider == 'facebook') ? array('email','publish_actions','user_actions.news','friends_actions.news') : array();
			$store = Request::getSessionStore();
			$result = Social::factory($provider, $store, $scopes)->{'connect'.ucfirst($provider)}();

			if (is_array($result)) {
				// Early check for denied request
				if (array_key_exists('denied', $result)) {
					// User was not authorized the connect action...
					return Redirect::route('auth_register');
				}

				// Remove unnecessary parts from result
				// since there is a chance we use cookie as session-store.
				//
				// Cookie has a size limit, 
				// so we have to careful with 
				// large provider data, such as Twitter
				if ($provider == 'twitter') {
					$result = array_only($result, array('id', 'name', 'profile_image_url', 'screen_name', 'location', 'description'));
				}

				// Pick-up oauth data
				if (($oauthToken = Session::get(Config::get('session.cookie')))
					&& is_array($oauthToken)
					&& array_key_exists(ucfirst($provider), $oauthToken)) {
					$oauthCredential = $oauthToken[ucfirst($provider)];
					$result['oauth'] = array(
						'access_token' => $oauthCredential->getAccessToken(),
						'refresh_token' => $oauthCredential->getRefreshToken(),
						'expired_at' => $oauthCredential->getEndOfLife(),
						'authorized_at' => time(),
					);

					// Forget the original oauth credential, to avoid oversized cookie
					Session::forget(Config::get('session.cookie'));
				}

				// Save it for good...
				Session::put('connections.'.$provider, $result);

				// Our first assumption : this is from new user
				// if they already logged-in, redirect to their account and sync it
				$route = (Auth::check()) ? '/user/'.Auth::user()->id : 'auth_register';

				// Findout if current result is already within database
				$social = SocialConnection::where('provider_uid', '=', $result['id'])->first();

				// Data
				$data = new Collection($result);

				// Social creator closure
				$create = function($user) use ($data, $provider) 
				{
					$connection = SocialConnection::create(array(
						'user_id' => $user->id,
						'provider' => $provider,
						'provider_uid' => $data->get('id'),
						'provider_username' => $data->get('username', $data->get('screen_name')),
						'name' => $data->get('name'),
						'data' => serialize($data->all()),
					));

					return $connection;
				};

				// If user already logged in
				if (Auth::check()) {
					$social = $create(Auth::user());
				}

				switch ($provider) {
					case 'twitter':
						// Twitter-specific post-request here...
						break;
					
					case 'facebook':
						// Facebook could retrieve email,
						// but user could choose to not give that.
						// Here we will do guestwork if-only email exists
						if (empty($social) && !Auth::check() && isset($result['email'])) {
							// Check if user exists
							$email = $result['email'];
							Session::flash('tmp_login', $email);

							try {
								// Login the user and attach the connection
								$user = Sentry::findUserByLogin($email);
								$social = $create($user);

								Sentry::login($user, true);

								return Redirect::intended('/');

							} catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
								$route = 'auth_register';
							}
							
						}
						break;

					default:
						// Any failover could take place here...
						break;
				}

				// If current social found
				if ($social && ! Auth::check())  {
					$connectedUser = $social->user;

					if ($connectedUser->isActivated()) {
						// Log the user in
						Sentry::login($connectedUser, true);

						return Redirect::intended('/');
					} else {
						// User already connected, but is not activated yet
						return Redirect::route('auth_activate_resend', $connectedUser->email);
					}

				}

			} else {
				// Here we get empty result, which mostly mean it trying to set HTTP header
				// Nothing need to do here, except...
				die;
			}
		} catch (Exception $e) {
			throw $e;
		}


		if (strpos($route, '/') === false) {
			return Redirect::route($route)->with('provider', $provider);
		} else {
			return Redirect::to($route)->with('provider', $provider);
		}
	}
}