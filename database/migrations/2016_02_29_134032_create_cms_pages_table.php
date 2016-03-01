<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lugs', 100);                    // Page reference eg: flyers.create, about-us, contact
            $table->string('instructions')->nullable();     // not sure what todo with this yet.
            $table->string('details')->nullable();          // Describe me this page
            $table->tinyInteger('menu_order');              // used for search and menu order
            $table->string('page_header');                  // Content title below the menu or above content
            $table->string('page_title');                   // meta tag for title
            $table->string('page_banner');                  // Usually only home page, however if its not null then display it.
            $table->integer('template')->unsigned();        // id to cms_templates table which will contain file location.
            $table->foreign('template')->references('id')->on('cms_templates')->onDelete('cascade'); // Blade file location
            $table->text('keywords')->nullable();           // Keywords for local search and search engines submissions
            $table->boolean('live');                        // Is this a live active page
            $table->dateTime('date_activating');            // date and time of when this page will go online.
            $table->dateTime('date_deactivating');          // date and time of when this page goes offline.
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
        Schema::drop('cms_pages');
    }
}
