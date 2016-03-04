<?php

use Illuminate\Database\Seeder;

class cmsArticlesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('LaravelExamples\cmsArticle', 20)->create();
    }
}
