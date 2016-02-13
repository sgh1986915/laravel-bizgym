<?php

use Illuminate\Database\Migrations\Migration;

class AddImagesUserMeta extends Migration {

    //TODO: mark for removal before 1.0
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(Schema::hasTable('user_meta')) {
            Schema::table('user_meta', function($table)
            {
                if (!Schema::hasColumn('user_meta', 'profile_image')) {
                    $table->string('profile_image', 255);
                }

                if (!Schema::hasColumn('user_meta', 'cover_image')) {
                    $table->string('cover_image', 255);
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
        if(Schema::hasTable('user_meta')) {
            Schema::table('user_meta', function($table)
            {
                if (Schema::hasColumn('user_meta', 'profile_image')) {
                    $table->dropColumn('profile_image');
                }

                if (Schema::hasColumn('user_meta', 'cover_image')) {
                    $table->dropColumn('cover_image');
                }
            });
        }
	}

}