<?php

/*
|--------------------------------------------------------------------------
| Register The Artisan Commands
|--------------------------------------------------------------------------
|
| Each available Artisan command must be registered with the console so
| that it is available to be called. We'll register every command so
| the console gets access to each of the command object instances.
|
*/

Artisan::add(new MigrateApplicationCommand());
Artisan::add(new AssetsPublishCommand());

// Some people still don't have dummy package installed,
// Load it only if it already within service-provider lists
if (App::offsetExists('dummy.creator')) {
	Artisan::add(new WorkbenchDummyCommand(app('dummy.creator')));
}