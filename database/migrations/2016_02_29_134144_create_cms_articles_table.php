<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pageid')->unsigned();              // Page which this articles goes into.
            $table->foreign('pageid')->references('id')->on('cms_pages')->onDelete('cascade');
            $table->tinyInteger('vertical_order');              // Order of this article on page from the top.
            $table->tinyInteger('horizontal-order');            // Order of this article on page from the left.
            $table->string('article_excerpt')->nullable();      // Teaser below header
            $table->string('article_header')->nullable();       // Header if any
            $table->string('article_body');                     // html Content of article. Don't use too much html tags.
                                                                // _note cms_templates governs the look and feel.
            $table->string('article_footer')->nullable();       // html content for the footer if any.
            $table->string('userid');                           // User or employee that created or edited this post.
                                                                // _note: Last edit becomes owner to simplify code.
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('cms_articles');
    }
}
