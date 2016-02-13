<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('UserMetaTableSeederTableSeeder');
		$this->call('GroupsTableSeeder');
		$this->call('GroupsUsersTableSeeder');
		$this->call('BrandsTableSeeder');
		$this->call('BrandsUsersGroupsTableSeeder');
		$this->call('GroupsRulesSeederTableSeeder');
		$this->call('MenuLocationTableSeeder');
		$this->call('MenuIconsTableSeeder');
		$this->call('MenuUriFilterTypeTableSeeder');
		$this->call('MenuItemTypeTableSeeder');
		$this->call('MenuTableDefaultMenuSeeder');
		$this->call('MenuItemTableDefaultMenuSeeder');
		$this->call('BadgeTypeSeeder');
	}

}
