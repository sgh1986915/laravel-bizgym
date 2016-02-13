<?php

class BrandsUsersGroupsTableSeeder extends Seeder {

	public function run()
	{
		// Refresh Brand_user_groups
		DB::table('group_user_brand')->truncate();

		$entries = array(
			array(
				'user_id' => Sentry::findUserByLogin('superuser@saasventure.com')->id,
				'group_id' => Sentry::findGroupByName('Admin')->id,
				'brand_id' => Groups::getBrandProvider()->findByTitle('BizGym')->id,
			),

			array(
				'user_id' => Sentry::findUserByLogin('foo@saasventure.com')->id,
				'group_id' => Sentry::findGroupByName('User')->id,
				'brand_id' => Groups::getBrandProvider()->findByTitle('SaaS Venture Group')->id,
			),

			array(
				'user_id' => Sentry::findUserByLogin('rob@bertholf.com')->id,
				'group_id' => Sentry::findGroupByName('Admin')->id,
				'brand_id' => Groups::getBrandProvider()->findByTitle('BizGym')->id,
			),

			array(
				'user_id' => Sentry::findUserByLogin('rob@bertholf.com')->id,
				'group_id' => Sentry::findGroupByName('User')->id,
				'brand_id' => Groups::getBrandProvider()->findByTitle('SaaS Venture Group')->id,
			),

		);

		// Uncomment the below to run the seeder
		DB::table('group_user_brand')->insert($entries);
	}

}
