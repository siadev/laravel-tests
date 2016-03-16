<?php
/**
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



// _doc Implicit Binding
// _note usage: http://simontests.dev/pages/1/
Route::get('pages/{cmsPage}', function(LaravelExamples\cmsPage $cmsPage) {
    dd($cmsPage);
});
// _note usage: http://simontests.dev/pages/1/articles/1
Route::get('pages/{cmsPage}/articles/{cmsArticle}',
    function(LaravelExamples\cmsPage $cmsPage,
        LaravelExamples\cmsArticle $cmsArticle) {
        $page= LaravelExamples\cmsPage::find($cmsPage->id);
        $articles = LaravelExamples\cmsArticle::where('page_id', $page->id);
        dd($articles);
    });

/** _doc How to access files directly within the public directory.
Route::get('/phpdocs', function() {
    return File::get(public_path() . '/phpdocs/index.html');
});
 */



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

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', function () {
        return view('pages.home');
    });

    Route::get('/home', 'HomeController@index');
    Route::get('cms', 'CmsDashController@dashboard');

    Route::resource('cms/templates', 'CmsTemplateController');
    Route::resource('cms/pages', 'CmsPageController');

    /* Flyers Controller
 *   _note: Adding new methods to a resource controller.
 *          Add a route to that controller's method separately,
 *          *** ==> before you register the resource <== ***
 */
    Route::resource('flyers', 'FlyersController');

    Route::get('/flyers/{postcode}/{street}', 'FlyersController@byPostcodeStreet');
    Route::post('flyers/{id}/save-photo', 'FlyersController@addPhoto');

    Route::get('docs/{name?}', function ($name=null) {
        if ( !$name == NULL )
        {
            return view('docs.' . $name);
        }
        else {
            return view('docs.index');
        }
    });
});
