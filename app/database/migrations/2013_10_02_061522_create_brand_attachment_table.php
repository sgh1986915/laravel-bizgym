<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBrandAttachmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('brand_attachment', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id');
            $table->integer('attachment_id');
            $table->string('type');

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('brand_attachment');
    }


}