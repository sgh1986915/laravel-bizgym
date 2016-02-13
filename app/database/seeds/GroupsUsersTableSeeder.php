<?php

class GroupsUsersTableSeeder extends Seeder {

	public function run()
	{
		// Refresh user groups
		DB::table('group_user_system')->truncate();

		// Assign administrator user to admin group
		try {
			$rob = Sentry::findUserByLogin('rob@bertholf.com');
			$rob->addGroup(Sentry::findGroupByName('Admin'));

			$administrator = Sentry::findUserByLogin('superuser@saasventure.com');
			$administrator->addGroup(Sentry::findGroupByName('Admin'));

			$foo = Sentry::findUserByLogin('foo@saasventure.com');
			$foo->addGroup(Sentry::findGroupByName('User'));

		} catch (Exception $e) {
			// If we need to stop it, then we could just throw it
			// throw $e;
		}
	}

}
