<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('pages.home');
});

// phpDocumentor generated files.place in the public folder.
// removed and replaced with route.
//Route::get('/phpdocs', function() {
//    return File::get(public_path() . '/phpdocs/index.html');
//});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    /* Flyers Controller
     *   Side note: Adding new methods to a resource controller.
     *              See below, Routes to other nodes in URI
     *              Add a route to that controller's method separately,
     *              *** ==> before you register the resource <== ***
     */
    Route::resource('flyers', 'FlyersController');

    Route::get('flyers/{postcode}/{street}', 'FlyersController@byPostcodeStreet');

    Route::get('docs/{name?}', function ($name=null) {
        if ( !$name == NULL )
        {
            return view('docs.' . $name);
        }
        else {
            return view('docs.index');
        }
    });
    Route::resource('docs', 'DocsController');


});



