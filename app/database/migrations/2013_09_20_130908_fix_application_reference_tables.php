<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class FixApplicationReferenceTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Fix non-standard convention migration
		if (Schema::hasTable('password_reminders')) {
			Schema::rename('password_reminders', 'user_password_reminders');
		}

		if (Schema::hasTable('users_social')) {
			Schema::rename('users_social', 'user_social');
		}

		if (Schema::hasTable('users_meta')) {
			Schema::rename('users_meta', 'user_meta');
		}
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Restore non-standard convention migration
		if (Schema::hasTable('user_password_reminders')) {
			Schema::rename('user_password_reminders', 'password_reminders');
		}

		if (Schema::hasTable('user_social')) {
			Schema::rename('user_social', 'users_social');
		}

		if (Schema::hasTable('user_meta')) {
			Schema::rename('user_meta', 'users_meta');
		}
	}

}
