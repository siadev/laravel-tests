<?php

use Illuminate\Database\Seeder;

class cmsPagesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('LaravelExamples\cmsPage', 50)->create();
    }
}
