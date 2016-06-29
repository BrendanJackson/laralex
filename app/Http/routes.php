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


//view(filename.blade.php goes here) alternatively, subtract the .blade.php
//for subfolders you can use subfolder.welcome or subfolder/welcome it doesnt matter
//but beware of tutorial syntax like this

/*Route::get('test', function () {
    return view('test'); calls test.blade.php
});

Route::get('about', function () {
   return view('about'); calls about.blade.php
});*/

/*referencing a controller https://laracasts.com/series/laravel-5-from-scratch/episodes/4?autoplay=true*/
Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');