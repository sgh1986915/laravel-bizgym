<?php

class BadgeTypeSeeder extends Seeder {

	public function run()
	{
		// Refresh Brands
		DB::table('badge_type')->truncate();

		$types = array(
				array('id' => 1, 'title' => 'Achievement', 'description' => 'This is for general user actions'),
				array('id' => 2, 'title' => 'Brand Specific', 'description' => 'This is brand related'),
				array('id' => 3, 'title' => 'Special Occation', 'description' => 'This is for Birthdays and stuff'),
		);

		// Uncomment the below to run the seeder
		DB::table('badge_type')->insert($types);
	}

}