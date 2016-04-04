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
    return view('about');
});

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
    $types = implode("|",App\Models\Item::allClasses(false));
    Route::get('{type}/create', 'ItemTaxonomyController@create')->where('type', $types);
    Route::post('item/store', 'ItemTaxonomyController@store');
    Route::get('{type}/{id}/edit', 'ItemTaxonomyController@edit')->where('type', $types);
    Route::patch('item/{id}/update', 'ItemTaxonomyController@update');
    //Route::delete('{id}/delete', 'ItemTaxonomyController@destroy');
    Route::get('{type}/{id}', 'ItemTaxonomyController@show')->where('type', $types);
    Route::get('{type}', 'ItemTaxonomyController@index')->where('type', $types);

});

Route::get('about', function(){
   return view('about');
});

