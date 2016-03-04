<?php

use Illuminate\Database\Seeder;

class cmsTemplatesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('LaravelExamples\cmsTemplate', 30)->create();
    }
}
