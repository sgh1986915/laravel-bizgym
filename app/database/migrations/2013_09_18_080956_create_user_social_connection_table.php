<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserSocialConnectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_social', function($table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('provider');
			$table->integer('provider_uid');
			$table->string('provider_username');
			$table->string('name');
			$table->string('email')->default('-');
			$table->binary('data');
			$table->timestamps();

			// We'll need to ensure that MySQL uses the InnoDB engine to
			// support the indexes, other engines aren't affected.
			$table->engine = 'InnoDB';
			$table->unique('provider_uid');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_social');
	}

}
