<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('welcome');
});

// Route::get('/about', function(){
//     return view('pages.about');
// });

// Route::get('/test/{id}/{name}', function($id, $name){
//     return 'this is '.$name.' with id of ' .$id;
// });

Route::get('/index', 'PagesController@index');

Route::get('/services', 'PagesController@services');

Route::get ('/about', 'PagesController@about');

Route::resource('posts', 'PostsController');

Route:: view ('/form','posts.form' );

Route::post('/submit', 'DetailsController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
