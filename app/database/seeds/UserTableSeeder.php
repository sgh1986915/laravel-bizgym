<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		// Refresh users
		DB::table('users')->truncate();

		// ItsTheRob
		$rob = array(
			'first_name' => 'Rob',
			'last_name' => 'Bertholf',
			'email' => 'rob@bertholf.com',
			'password' => 'asdfasdf'
		);

		Sentry::register($rob, true);

		// Administrator user
		$administrator = array(
			'first_name' => 'Benevolent',
			'last_name' => 'Dictator',
			'email' => 'superuser@saasventure.com',
			'password' => 'sup3rs3cr3t'
		);

		Sentry::register($administrator, true);

		// Normal user
		$foo = array(
			'first_name' => 'Mr.',
			'last_name' => 'Foo',
			'email' => 'foo@saasventure.com',
			'password' => 'f00b4r'
		);

		Sentry::register($foo, true);
	}

}
