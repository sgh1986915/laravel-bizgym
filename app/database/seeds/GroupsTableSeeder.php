<?php

class GroupsTableSeeder extends Seeder {

	public function run()
	{
		// Refresh groups
		DB::table('groups')->truncate();

		// Create the groups
		$groups = array(
			// User
			array(
				'name'        => 'User',
				'permissions' => array(
					'superuser' => 0,
					'is_admin' => 0,
					'login' => 0,
					'register' => 0,
					'all_public_pages' => 1,
					'admin_panel' => 0,
				),
				'type' => 0,
				'deletable' => 0,
			),

			// Admin
			array(
				'name'        => 'Admin',
				'permissions' => array(
					'superuser' => 1,
					'is_admin' => 1,
					'login' => 0,
					'register' => 0,
					'all_public_pages' => 1,
					'admin_panel' => 1,
				),
				'type' => 0,
				'deletable' => 0,
			),
		);

		foreach ($groups as $group) {
			try {
				Sentry::createGroup($group);
			} catch (Exception $e) {
				// If we need to stop it, then we could just throw it
				// throw $e;
			}
		}
	}

}
