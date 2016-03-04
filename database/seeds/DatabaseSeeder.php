<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
//    protected $removeRows = [
//        'users', 'flyers_photos', 'flyers'
//    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        foreach ($this->removeRows as $table) {
//            DB::table($table)->truncate();
//        }

        $this->call('UsersTable');
        $this->call('cmsTemplatesTable');
        $this->call('cmsPagesTable');
        $this->call('cmsArticlesTable');
        $this->call('cmsMenusTable');
        $this->call('FlyersTable');
        $this->call('FlyersPhotoTable');
    }
}
