<?php

use Illuminate\Database\Seeder;

class cmsMenusTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('LaravelExamples\cmsMenu', 30)->create();
    }
}
