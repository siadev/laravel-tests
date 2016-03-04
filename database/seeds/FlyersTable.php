<?php

use Illuminate\Database\Seeder;

class FlyersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flyer = new LaravelExamples\Flyer();

        $flyer->create([
            'street'       => '185 Awaba Road',
            'city'         => 'Toronto',
            'place'        => 'over there',
            'postcode'     => '2283',
            'state'        => 'NSW',
            'country'      => 'Australia',
            'price'        => '22',
            'description'  => 'The best flyer of them all',

        ]);
        factory('LaravelExamples\Flyer', 30)->create();
    }
}
