<?php

/*
|--------------------------------------------------------------------------
| Application Events
|--------------------------------------------------------------------------
|
| Here you may also register your custom event listener or subscriber.
|
*/

Event::listen('auth.*', function($param, $event){
	switch ($event) {
		case 'auth.logout':
			// Get user-id
			$user = $param;
			$userId = $user->id;

			// Proxy to sentry logout
			Sentry::logout();

			// Log activity
			Event::fire('log.user_activity', array(
				Logger::LOW, 
				$userId,
				array(
					array(
						'sub_type' => 'auth.logout',
						'detail' => '%s signed out',
						'icon' => 'icon-user',
						'deletable' => 0,
						'value' => $user,
					),
				)
			));
			break;

		case 'auth.login':
			// Remove any temporary parameter
			Session::forget('tmp_login');
			Session::forget('tmp_register');

			// Log activity
			Event::fire('log.user_activity', array(
				Logger::LOW, 
				Auth::user()->id, 
				array(
					array(
						'sub_type' => 'auth.login',
						'detail' => '%s signed in',
						'icon' => 'icon-user',
						'deletable' => 0,
						'value' => $param,
					),
				)
			));

			break;

		case 'auth.register':
			$user = $param;

			// As default, we will assign user group
			$user->addGroup(Sentry::findGroupByName('User'));

			// Log activity
			Event::fire('log.user_activity', array(
				Logger::LOW, 
				$user->id,
				array(
					array(
						'sub_type' => 'auth.register',
						'detail' => '%s signed up',
						'icon' => 'icon-user',
						'deletable' => 0,
						'value' => $param,
					),
				)
			));
			break;

		case 'auth.check_acl':
			// Here we'll get the current request instance
			// thus allowing us to check and dynamically assign roles
			$request = $param;

			// This is initial implementation, as we just check login state
			if (Auth::check()) {
				// If it already login, we will assign 'user'
				$roles = array('user');
				$throttle = Sentry::findThrottlerByUserId(Auth::user()->id);

				if ($throttle->isBanned()) {
					// Nothing we can do about it... :(
					$roles = array('banned');
				} else {
					// Let see their system roles
					foreach (Auth::user()->getGroups() as $group) {
						$roles[] = strtolower($group->name);
					}
				}

				if ($param instanceof Illuminate\Http\Request) {
					if ($param->is('user/profile')) {
						// Assign 'me' role
						$roles[] = 'me';
					}
				}

				return $roles;
			} else {
				// TODO : check blacklist ip?
				return array('guest');
			}
			break;
	}
});