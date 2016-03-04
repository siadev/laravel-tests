<?php

use Illuminate\Database\Seeder;

class FlyersPhotoTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('LaravelExamples\Photo', 10)->create();
    }
}
