<?php

/*
|--------------------------------------------------------------------------
| Register The Laravel Class Loader
|--------------------------------------------------------------------------
|
| In addition to using Composer, you may use the Laravel class loader to
| load your controllers and models. This is useful for keeping all of
| your classes in the "global" namespace without Composer updating.
|
*/

ClassLoader::addDirectories(array(

	app_path().'/commands',
	app_path().'/controllers',
	app_path().'/models',
	app_path().'/database/seeds',
	app_path().'/libraries',
	app_path().'/widgets',
));

/*
|--------------------------------------------------------------------------
| Application Error Logger
|--------------------------------------------------------------------------
|
| Here we will configure the error logger setup for the application which
| is built on top of the wonderful Monolog library. By default we will
| build a rotating log file setup which creates a new file each day.
|
*/

$logFile = 'log-'.php_sapi_name().'.txt';

Log::useDailyFiles(storage_path().'/logs/'.$logFile);

/*
|--------------------------------------------------------------------------
| Application ACL
|--------------------------------------------------------------------------
|
| Here we could specify all Access Control List roles and resources
| so that, it available across different part of the application
| @see config/packages/saas/acl/acl.php
*/
if ( ! App::runningInConsole()) {
	Acl::setup(Config::get('acl::acl'));
}

/*
|--------------------------------------------------------------------------
| Application Logger
|--------------------------------------------------------------------------
|
| Here we tell the main logger component to start listening to logger events
*/
if ( ! App::runningInConsole()) {
	Logger::startListening();
}

/*
|--------------------------------------------------------------------------
| Application Error Handler
|--------------------------------------------------------------------------
|
| Here you may handle any errors that occur in your application, including
| logging them or displaying custom views for specific errors. You may
| even register several error handlers to handle different types of
| exceptions. If nothing is returned, the default error view is
| shown, which includes a detailed stack trace during debug.
|
*/

ini_set('error_reporting', E_ALL & ~E_DEPRECATED & ~E_NOTICE);

App::error(function(Exception $exception, $code)
{
	Log::error($exception);

	if (App::runningInConsole() && App::environment() !== 'testing') {
		return Response::make($exception);
	}

    if(Input::get('dbg') == 1) {
        return;
    }

	// Here we response invalid request with an error page
	$layout = View::exists('errors.'.$code) ? 'errors.'.$code : 'errors.500';
	$title = $code;
	$errors = trans($exception->getMessage());

	if (App::environment() !== 'local') {
		return View::make($layout, compact('title', 'errors'));
	} 
});

/*
|--------------------------------------------------------------------------
| Maintenance Mode Handler
|--------------------------------------------------------------------------
|
| The "down" Artisan command gives you the ability to put an application
| into maintenance mode. Here, you will define what is displayed back
| to the user if maintenace mode is in effect for this application.
|
*/

App::down(function()
{
	return Response::make("Be right back!", 503);
});

/*
|--------------------------------------------------------------------------
| Continuous Integration Testing Database
|--------------------------------------------------------------------------
|
| If current environment is `testing` and our app catch jenkins build var
| then it will automatically use jenkins-specific database. Otherwise,
| it will use local testing configuration.
|
*/

if (App::environment() == 'testing') {
	if (getenv('JOB_NAME')) {
		// This test is running from jenkins, so overide the default connection
		// @see ./app/config/testing/database.php
		Config::set('database.default', 'jenkins_mysql');
	}
}

/*
|--------------------------------------------------------------------------
| Require The Filters File
|--------------------------------------------------------------------------
|
| Next we will load the filters file for the application. This gives us
| a nice separate location to store our route and application filter
| definitions instead of putting them all in the main routes file.
|
*/

require app_path().'/filters.php';

/*
|--------------------------------------------------------------------------
| Require The Events File
|--------------------------------------------------------------------------
|
| Then we will load the events file for the application. 
|
*/

require app_path().'/events.php';

/*
|--------------------------------------------------------------------------
| Require The Widget File
|--------------------------------------------------------------------------
|
| Last we will load the widgets file for the application. 
|
*/

require app_path().'/widgets.php';

require app_path().'/composers.php';
