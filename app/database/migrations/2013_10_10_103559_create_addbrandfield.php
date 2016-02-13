<?php

use Illuminate\Database\Migrations\Migration;

class CreateAddbrandfield extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(Schema::hasTable('brands')) {
            Schema::table('brands', function($table)
            {
                if (!Schema::hasColumn('brands', 'location')) {
                    $table->string('location', 255);
                }
            });
        }
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		if(Schema::hasTable('brands')) {
            Schema::table('brands', function($table)
            {
                if (Schema::hasColumn('brands', 'location')) {
                    $table->dropColumn('location');
                }
            });
        }
	}

}