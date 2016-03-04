<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{

    /*  _doc: Insert this in documents or procedures then remove
     *  ~> Styles of testing
     *     - Acceptance testing
     *        slower
     *     - Unit testing
     *        faster
     *     - Functional testing
     *         slower
     *
    */

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('newsite')
             ->click('Docs')
             ->see('This site was')
             ->seePageIS('/docs');
    }

    /** test */
    public function it_shows_the_form_to_create_a_new_flyer()
    {
        $this->visit('flyers/create');
    }
}
