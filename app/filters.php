<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	// Ensure remember-me valid across both sentry and L4 auth
	if ( ! Auth::check()) {
		$userArray = Sentry::getCookie()->get();

		if ($userArray && (list($id, $persistCode) = $userArray)) {
			$caller = User::find($id);

			if ($caller && $caller->checkPersistCode($persistCode)) {
				// They are remembered people!
				Sentry::login($caller, true);
			}
		}
	}

	// Respect testing-stub data
	if ($request->getSessionStore()->has('roles') && App::environment() == 'testing') {
		// Here we could set useful setting for corresponding stub
		// for now we let it empty
	} else {
		// In regular request, we will monitoring their roles on each request
		$roles = Event::fire('auth.check_acl', array($request));

		// Then attach the roles into corresponding request
		$request->getSessionStore()->set('roles', $roles);
	}
});

App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::guest('login');
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

/*
|--------------------------------------------------------------------------
| Request-specific Filter
|--------------------------------------------------------------------------
|
| The "ajax" filter is used to filter call and only allow XMLHTTPRequest/AJAX
| The "local_only" filter is used to filter call and only allowed within local environment
*/

Route::filter('ajax', function($route, $request)
{
	if( ! $request->ajax())
	{
		throw new BadMethodCallException('error.ajax_only');
	}
});

Route::filter('local_only', function()
{
	if (App::environment() !== 'local')  {
		throw new RuntimeException('This only viewable from local environment');
	}
});

Route::filter('publish_local_assets', function()
{
	if (App::environment() === 'local')  {
		try {
			$basset = App::make('basset');
			$builder = App::make('basset.builder');
			$janitor = App::make('basset.builder.cleaner');

			$collection = $basset->collection('application');

			foreach (array('stylesheets', 'javascripts') as $type) {
				$builder->buildAsProduction($collection, $type);
			}
			$janitor->clean('application');
		} catch(Basset\Exceptions\BuildNotRequiredException $e) {
			// Its okay!
		} catch (Exception $e) {
			// If necessary, throw the error...
			throw $e;
		}
	}
});

/*
|--------------------------------------------------------------------------
| ACL Filters
|--------------------------------------------------------------------------
|
| This is the filters that derived from acl configuration in global,
| and should be used accross application instead analog filter from Laravel above
|
| @see ./app/global.php
| @see ./app/config/packages/saas/acl/acl.php
| @see ./app/lang/en/acl.php
*/

Route::filter('can_view_pages', function()
{
	if ( ! Acl::isAllowed(Session::get('roles'), 'all_public_pages')) {
		// Kick
		Auth::logout();

		// Always return Not found response for banned user!
		throw new DomainException('acl.banned');
	}
});

Route::filter('can_login', function()
{
	if ( ! Acl::isAllowed(Session::get('roles'), 'login')) {
		return Redirect::to('/')->with('message', 'acl.login');
	}
});

Route::filter('can_register', function()
{
	if ( ! Acl::isAllowed(Session::get('roles'), 'register')) {
		return Redirect::to('/error')->with('error', 'acl.register');
	}
});

Route::filter('can_access_admin_panel', function()
{
	if ( ! Acl::isAllowed(Session::get('roles'), 'admin_panel')) {
		if(Auth::check()) {
			return Redirect::to('/error')->with('error', 'acl.insufficient');
		} else {
			return Redirect::to('/auth/login')->with('error', 'acl.insufficient');
		}
	}
});


/*
 ************************************************
 *              Forum Filters                   *
 *                                              *
 ************************************************
 */

/**
 * | Saas forum filter to determine whether or not a user has the proper groups,
 * | in order to access the forum category.
 */

Route::filter('forum_permissions' , function($permission)
{
    return;

    $category_slug = URI::segment(2);
    $category = \Saas\Forum\Models\Categories::by_slug($category_slug);

    if(empty($category))
    {
        return Redirect::to('forum');
    }

    try
    {
        if(Sentry::check())
        {
            $user_id = \Saas\Forum\Models\User::ofSentry()->id;
            $brand_id = \Saas\Forum\Models\User::ofSentry()->active_brand();

            $result = \Saas\Forum\Models\Permissions::CheckPermissions((int) $category->id, $user_id, $brand_id, $permission);

            if(!$result)
            {
                return Redirect::to('forum')->with('errors', "Sorry Dave, I can't do that.");
            }
        }
        else
        {
            $user_id = 0;
            $brand_id = 0;

            if($permission != 'can_view_category')
            {
                return Redirect::to_route('login')->with('errors', "You must be logged in.");
            }

            $result = \Saas\Forum\Models\Permissions::CheckPermissions((int) $category->id, $user_id, $brand_id, $permission);

            if(!$result)
            {
                return Redirect::to_route('login')->with('errors', "You must be logged in.");
            }
        }
    }
    catch(Cartalyst\Sentry\Users\UserNotFoundException $e)
    {
        dd($e);
    }
});