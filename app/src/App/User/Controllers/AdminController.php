<?php

namespace App\User\Controllers;

use Saas\Admin\PackageController as BaseController;
use Saas\Groups\Brands\Eloquent\Brand;
use Saas\Groups\Groups\Eloquent\Group;
use Cartalyst\Sentry\Users;
use Illuminate\Support\Collection;
use \User, \UserMeta, \Sentry, \Input, \Redirect, \Session, \AccountMailer, \Validator, \Route, \Event, \Groups;

class AdminController extends BaseController
{
	public static $nick = 'user';
	public static $type = self::REST;

	/**
	 * Overview
	 */
	public function getIndex()
	{
		$users = array_filter(Sentry::getUserProvider()->findAll(), function($user)
		{
			// In case we need filters...
			return true;
		});

		$this->viewData = array(
			'title' => 'User Panel',
			'users' => $users,
		);

		$this->setupLayout();
	}

	/**
	 * Group update landing
	 */
	public function getUpdate($id = 0)
	{
		$user = User::find((int) Input::get('user_id'));

		if ( ! $user && !empty($id)) {
			$user = User::find($id);

			if ( ! $user) Redirect::back()->with('warning', 'Invalid user id');
		}

		$this->viewData = array(
			'title' => 'User Panel - Edit '.$user->getFullname($user->email),
			'user' => $user,
			'brands' => Brand::all(),
			'groups' => Group::all(),
		);

		$this->setupLayout();
	}


	/**
	 * Group update
	 */
	public function postUpdate($id = 0)
	{
		$user = User::find((int) Input::get('user_id'));

		if ( ! $user && !empty($id)) {
			$user = User::find($id);

			if ( ! $user) Redirect::back()->with('warning', 'Invalid user id');
		}

		if (Input::has('email')) {
			Input::flash();

			if ( ! $user->metas) {
				$meta = UserMeta::create(array(
					'username' => '',
				));
				// First time meta
				$user->metas()->save($meta);
			}

			$userMeta = $user->metas()->first();

			$validator = Validator::make(Input::all(), array(
				'email' => 'required|email',
				'website' => 'url',
				'username' => 'unique:user_meta,username,'.$userMeta->id,
				'password' => (Input::get('change_password') == 'on' ? 'required|':'').'min:5|confirmed'
			));

			if ($validator->fails()) {
				$error = $validator->messages()->first();
			} else {
				try {
					// Update the user
					$user->first_name = Input::get('first_name');
					$user->last_name = Input::get('last_name');
					$user->email = Input::get('email');
					$user->save();

					// Check for activation
					if (($activationState = Input::get('account_status', '0')))
					{
						if ( ! $user->isActivated()) {
							$user->attemptActivation($user->getActivationCode());
						}
					} else {
						$user->activated = NULL;
						$user->save();
					}

					// Check for password changes
					if (Input::get('change_password') == 'on' && ($newPassword = Input::get('password')) && !empty($newPassword)) {
						if ($newPassword == Input::get('password_confirmation')) {
							$user->attemptResetPassword($user->getResetPasswordCode(), $newPassword);
						} else {
							return Redirect::back()->with('warning', 'Password confirmation does not match');
						}
					}

					// Update the meta
					$userMeta->username = Input::get('username');
					$userMeta->website = Input::get('website');
					$userMeta->location = Input::get('location');
					$userMeta->title = Input::get('title');
					$userMeta->bio = Input::get('bio');
					$userMeta->save();

					return Redirect::route(Route::getBaseAdminRoute().'.user.getindex')->with('message', 'User "'.$user->id.'" updated');
				} catch (\Exception $e) {
					$error = $e->getMessage();
				}
			}

			// Populate any errors
			if (isset($error)) {
				Session::flash('warning', $error);
			}
		}

		$this->viewData = array(
			'title' => 'User Panel - Edit '.$user->getFullname($user->email),
			'user' => $user,
			'brands' => Brand::all(),
			'groups' => Group::all(),
		);

		$this->setupLayout();
	}

	/**
	 * User details
	 */
	public function getDetails($id)
	{
		$user = User::find($id);

		$this->viewData = array(
			'title' => 'User Panel - '.$user->getFullname($user->email),
			'user' => $user,
		);

		$this->setupLayout();
	}

	/**
	 * New user
	 */
	public function getNew()
	{
		$this->viewData = array(
			'title' => 'User Panel - Create',
		);

		$this->setupLayout();
	}

	/**
	 * Suspended overview
	 */
	public function getSuspended()
	{
		$users = array_filter(Sentry::getUserProvider()->findAll(), function($user)
		{
			$throttle = Sentry::findThrottlerByUserId($user->id);

			return $throttle->isSuspended();
		});

		$this->viewData = array(
			'title' => 'User Panel - Suspended',
			'users' => $users,
		);

		$this->setupLayout();
	}

	/**
	 * Banned overview
	 */
	public function getBanned()
	{
		$users = array_filter(Sentry::getUserProvider()->findAll(), function($user)
		{
			$throttle = Sentry::findThrottlerByUserId($user->id);

			return $throttle->isBanned();
		});

		$this->viewData = array(
			'title' => 'User Panel - Banned',
			'users' => $users,
		);

		$this->setupLayout();
	}

	public function postNew()
	{
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

				Event::fire('auth.register', $user);

				AccountMailer::factory($user)->sendActivation();
				Session::flash('activation', $user->email);

				return Redirect::route(Route::getBaseAdminRoute().'.user.getindex')->with('message', 'Registration success');
			}
			catch (Users\LoginRequiredException $e)
			{
				$error = 'Email field is required.';
			}
			catch (Users\PasswordRequiredException $e)
			{
				$error = 'Password field is required.';
			}
			catch (Users\UserExistsException $e)
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

			return Redirect::back()->with('warning', $error);
		}
	}

	public function postBan()
	{
		if (Input::has('user_id')) {
			try {
				$throttle = Sentry::findThrottlerByUserId(Input::get('user_id'));

				// Let see their groups
				$roles = array();
				foreach ($throttle->user->getMergedPermissions() as $permission => $status) {
					if ($status) {
						$roles[] = $permission;
					}
				}

				if (in_array('is_admin', $roles) || in_array('superuser', $roles)) {
					return Redirect::back()->with('warning', 'Cant ban admin or superuser');
				}

				// Attempt to ban the user
				$throttle->ban();

			} catch (\Exception $e) {
				return Redirect::back()->with('warning', $e->getMessage());
			}
		}

		return Redirect::back()->with('message', $throttle->user->email.' banned.');
	}

	public function postUnban()
	{
		if (Input::has('user_id')) {
			try {
				$throttle = Sentry::findThrottlerByUserId(Input::get('user_id'));

				// Attempt to unBan the user
				$throttle->unBan();

			} catch (\Exception $e) {
				return Redirect::back()->with('warning', $e->getMessage());
			}
		}

		return Redirect::back()->with('message', $throttle->user->email.' unbanned.');
	}

	public function postSuspend()
	{
		if (Input::has('user_id')) {
			try {
				$throttle = Sentry::findThrottlerByUserId(Input::get('user_id'));

				// Let see their groups
				$roles = array();
				foreach ($throttle->user->getMergedPermissions() as $permission => $status) {
					if ($status) {
						$roles[] = $permission;
					}
				}

				if (in_array('is_admin', $roles) || in_array('superuser', $roles)) {
					return Redirect::back()->with('warning', 'Cant suspend admin or superuser');
				}

				// Attempt to suspend the user
				$throttle->suspend();

			} catch (\Exception $e) {
				return Redirect::back()->with('warning', $e->getMessage());
			}
		}

		return Redirect::back()->with('message', $throttle->user->email.' suspended.');
	}

	public function postUnsuspend()
	{
		if (Input::has('user_id')) {
			try {
				$throttle = Sentry::findThrottlerByUserId(Input::get('user_id'));

				// Attempt to unsuspend the user
				$throttle->unsuspend();

			} catch (\Exception $e) {
				return Redirect::back()->with('warning', $e->getMessage());
			}
		}

		return Redirect::back()->with('message', $throttle->user->email.' unsuspended.');
	}

	public function postActivate()
	{
		if (Input::has('user_id')) {
			try {
				$user = Sentry::findUserById(Input::get('user_id'));

				// Let's get the activation code
				$activationCode = $user->getActivationCode();

				// Attempt to activate and log the user in
				$user->attemptActivation($activationCode);

			} catch (\Exception $e) {
				return Redirect::back()->with('warning', $e->getMessage());
			}
		}

		return Redirect::back()->with('message', $user->email.' activated.');
	}

	/**
	 * Group update
	 */
	public function postGroupupdate($id = 0)
	{
		$user = User::find((int) Input::get('user_id'));

		if ( ! $user && !empty($id)) {
			$user = User::find($id);

			if ( ! $user) return Redirect::back()->with('warning', 'Invalid user id');
		}

		if (Input::has('type') && Input::get('method')) {
			if (Input::get('method') == 'save') {
				// Add group
				if (Input::get('type') == 'brand') {
					// Brand group
					$brand = Groups::getBrandProvider()->findByTitle(Input::get('brand'));

					if ( ! $brand) return Redirect::back()->with('warning', 'Invalid brand id. Select a brand first.');

					Groups::getRelationProvider()->create(array(
						'user_id' => $user->id,
						'group_id' => Input::get('group_id'),
						'brand_id' => $brand->id,
					));
				} else {
					// System group
					$user->addGroup(Sentry::findGroupById(Input::get('group_id')));
				}
			} elseif (Input::get('method') == 'delete') {
				$meta = base64_decode(Input::get('meta'));
				$meta = (is_string($meta)) ? unserialize($meta) : array();
				$meta = new Collection($meta);

				// Remove group
				if (Input::get('type') == 'brand') {
					// Remove brand group
					$brand = Groups::getBrandProvider()->findByTitle($meta->get('brand'));
					foreach(Groups::getRelationProvider()->findUserBrandGroups($user->id, $brand->id) as $group) {
						$group->delete();
					}
				} else {
					// Remove system group
					$user->removeGroup(Sentry::findGroupById($meta->get('group_id')));
				}

			}
		}

		return Redirect::back()->with('message', 'Group updated');
	}
}