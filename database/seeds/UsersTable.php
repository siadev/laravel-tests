<?php

use Illuminate\Database\Seeder;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = new LaravelExamples\User();

        $users->create([
           'name'  => 'simon',
            'password' => bcrypt('itbuff2121'),
        ]);

        factory('LaravelExamples\User', 50)->create();
    }
}
