<?php

class BrandsTableSeeder extends Seeder {

	public function run()
	{
		// Refresh Brands
		DB::table('brands')->truncate();

		$brands = array(
			array('id' => 1, 'title' => 'BizGym', 'description' => 'Build it!', 'slug' => 'bizgym'),
			array('id' => 2, 'title' => 'SaaS Venture Group', 'description' => 'The Foundation', 'slug' => 'saasventure'),
		);

		// Uncomment the below to run the seeder
		DB::table('brands')->insert($brands);
	}

}
