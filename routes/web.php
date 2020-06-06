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
    return view('welcome');
});

Route::get('login/github', 'Auth\LoginController@github');
Route::get('login/google', 'Auth\LoginController@google');

Route::get('login/github/redirect', 'Auth\LoginController@githubRedirect');
Route::get('login/google/redirect', 'Auth\LoginController@googleRedirect');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');