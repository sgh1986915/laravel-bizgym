<?php

class UserMetaTableSeederTableSeeder extends Seeder {

	public function run()
	{
		// Wipe the table clean before populating
		DB::table('user_meta')->truncate();

		$entries = array(
			array(
				'user_id' => Sentry::findUserByLogin('rob@bertholf.com')->id,
				'username' => 'rob',
				'location' => 'Hawaii',
				'website' => 'http://rob.bertholf.com',
				'title' => '@Rob',
				'bio' => 'Its the Rob',
			),

			array(
				'user_id' => Sentry::findUserByLogin('superuser@saasventure.com')->id,
				'username' => 'superuser',
				'location' => 'Hawaii',
				'website' => 'http://saasventure.com',
				'title' => 'Really Super',
				'bio' => 'Super... Really',
			),

			array(
				'user_id' => Sentry::findUserByLogin('foo@saasventure.com')->id,
				'username' => 'foo',
				'location' => 'Hawaii',
				'website' => 'http://saasventure.com',
				'title' => 'Not so Super',
				'bio' => 'Not so... Really',
			),
		);

		// Run the seeder
		DB::table('user_meta')->insert($entries);
	}

}
