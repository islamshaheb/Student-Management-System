<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});


Route::get('/', 'StudentController@index');
Route::get('/home', 'StudentController@home');
Route::get('/', function () {
    return view('regg');
    });


Route::get('/', function () {
    return view('index');
    });

Route::get('/addcourse', function () {
    return view('addcourse');
    });
*/
    
Route::get('/', 'StudentController@index');
Route::get('/index', 'StudentController@index')->name('index');
Route::get('/addcourse', 'StudentController@addcourse');
Route::get('/createcourse', 'StudentController@createcourse')->name('createcourse');
Route::get('/allcourse', 'StudentController@allcourse')->name('allcourse');
Route::get('/register', 'StudentController@register')->name('register');
Route::get('/about', 'StudentController@about');
Route::get('/contact', 'StudentController@contact');
Route::get('/login', 'StudentController@login');


Route::post('/store', 'StudentController@store')->name('store');
Route::post('/save', 'StudentController@save')->name('save');
Route::post('/addc', 'StudentController@addc')->name('addc');

