<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_templates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('template_name');        // Short name of template this will be a blade file.
            $table->string('template_path');        // written in Laravel form example: layouts.admins
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
        Schema::drop('cms_templates');
    }
}
