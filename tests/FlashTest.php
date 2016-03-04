<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FlashTest extends TestCase  //or PHPUnit_Framework_TestCase
{
    /**
     *  _doc Feature display Flash Message
     *    Why  - In order to determine if my form submission is successful or not.
     *    Who  - As a guest or member
     *    What - Display a self closing toast window containing a Successful or failed message.
     *
     *  todo: Do one test for SweetAlert and another for toastr
     *
     * _doc Feature Retrieve data from the Flyers database.
     *      Why  - In order to view information on a web page
     *             I must be able to retrieve the information from the database.
     *      Who  - As a guest or member
     *      What - Display the record on a web page.
     * http://simontests.dev/2283/185%20Awaba%20Road
     * @return void
     *
     */

    public function test_database_functionality()
    {
        $this->seeInDatabase('flyers', ['street' => '185 Awaba Road'])
             ->visit('/flyers/2283/185%20Awaba%20Road')
             ->see('2283')
             ->click('Docs')
             ->see('This site was')
             ->seePageIS('/docs');
    }
}
