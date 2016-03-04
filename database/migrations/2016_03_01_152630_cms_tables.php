<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CmsTables extends Migration
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
            $table->string('lug', 100);                                // Page reference eg: flyers.create, about-us, contact
            $table->string('instructions')->nullable();                 // not sure what todo with this yet.
            $table->string('details')->nullable();                      // Describe me this page
            $table->tinyInteger('menu_order')->nullable();              // used for search and menu order
            $table->string('page_header')->nullable();                  // Content title below the menu or above content
            $table->string('page_title')->nullable();                   // meta tag for title
            $table->string('page_banner')->nullable();                  // Usually only home page, however if its not null then display it.
            $table->integer('template_id')->unsigned()->nullable();     // id to cms_templates table which will contain file location.
            $table->text('keywords')->nullable();                       // Keywords for local search and search engines submissions
            $table->boolean('live')->nullable();                        // Is this a live active page
            $table->dateTime('date_activating')->nullable();            // date and time of when this page will go online.
            $table->dateTime('date_deactivating')->nullable();          // date and time of when this page goes offline.
            $table->timestamps();
        });

        Schema::create('cms_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_id')->unsigned();              // Page which this articles goes into.
            $table->integer('user_id')->unsigned();              // Who published this article.
            $table->tinyInteger('vertical_order')->nullable();              // Order of this article on page from the top.
            $table->tinyInteger('horizontal-order')->nullable(); // Order of this article on page from the left.
            $table->string('article_excerpt')->nullable();       // Teaser below header
            $table->string('article_header')->nullable();        // Header if any
            $table->string('article_body')->nullable();          // html Content of article. Don't use too much html tags.
            // _note cms_templates governs the look and feel.
            $table->string('article_footer')->nullable();         // html content for the footer if any.
            // _note: Last edit becomes owner to simplify code.
            $table->timestamps();
        });


        Schema::create('cms_menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key', 100)->nullable();                 // Parent example: Flyers
            $table->string('url', 100)->nullable();                 // Guess ? example /flyers
            $table->string('icon', 100)->nullable();                // Location of menu icon or NULL
            $table->tinyInteger('permission');                      // Access level 1-admin, 2-publisher, 3-sales, 5-guest
            $table->text('name')->nullable();                       // review: not sure if we're going to use this
            $table->text('description')->nullable();                // describe this menu item
            $table->enum('open', ['New', 'Same'])->default('Same')->nullable(); // _review: State of menu perhaps.
            $table->boolean('has_sub')->nullable();                 // if so then it's a parent
            $table->integer('order')->nullable();                   // used for ordering top to bottom or left to right
            $table->string('upload_folder', 150)->nullable();        // _review: not sure what to do with this yet
            $table->boolean('status')->default('1')->nullable();    // todo: link this to page->live field
            $table->timestamps();
        });

        Schema::create('cms_templates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('template_name')->nullable();        // Short name of template this will be a blade file.
            $table->string('template_path')->nullable();        // written in Laravel form example: layouts.admins
            $table->timestamps();
        });


        Schema::table('cms_articles', function($table) {
            $table->foreign('page_id')->references('id')->on('cms_pages')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('cms_pages', function($table) {
            $table->foreign('template_id')->references('id')->on('cms_templates')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('cms_pages', function (Blueprint $table) {
            $table->dropForeign('cms_pages'.'_template_id_foreign');
        });

        Schema::table('cms_articles', function (Blueprint $table) {
            $table->dropForeign('cms_articles'.'_page_id_foreign');
            $table->dropForeign('cms_articles'.'_user_id_foreign');
        });

        Schema::drop('cms_pages');

        Schema::drop('cms_articles');

        Schema::drop('cms_menus');

        Schema::drop('cms_templates');

    }
}
