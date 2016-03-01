<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cms_menus');
    }
}
