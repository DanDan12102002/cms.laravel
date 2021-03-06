<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/post/{id}', 'PostController@index');
Route::resource('posts', 'PostController');

Route::get('/contact', 'PostController@contact');

Route::get('post/{id}/{user}/{password}', 'PostController@show_post');


/*Route::get('/contact', function () {
    return 'Hi contact page';
});

Route::get('/about', function () {
    return 'Hi about page';
});

Route::get('/posts/{id}/{name}', function ($id, $name){
    return 'This is post number '. $id . ' ' . $name;
});

Route::get('admin/posts/example', array('as'=>'admin.home' ,function() {
    $url = route('admin.home');
    return 'This url is ' . $url;
}));*/