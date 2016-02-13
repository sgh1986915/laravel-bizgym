<?php

class GroupsRulesSeederTableSeeder extends Seeder {

	public function run()
	{
		// Wipe the table clean before populating
		DB::table('group_rules')->truncate();

		$entries = array(
			array('name' => 'Super User', 'slug' => 'superuser', 'description' => 'Benevolent Dictator', 'deletable' => 0),
			array('name' => 'Administrator', 'slug' => 'is_admin', 'description' => 'Administrative Privilege', 'deletable' => 0),
			array('name' => 'Admin Panel', 'slug' => 'admin_panel', 'description' => 'User can view admin panel', 'deletable' => 0),
			array('name' => 'Public Pages', 'slug' => 'all_public_pages', 'description' => 'Access to public pages', 'deletable' => 0),
			array('name' => 'Login', 'slug' => 'login', 'description' => 'User can login into site', 'deletable' => 0),
			array('name' => 'Register', 'slug' => 'register', 'description' => 'User can login into register into site', 'deletable' => 0),
		);

		// Uncomment the below to run the seeder
		DB::table('group_rules')->insert($entries);
	}

}
