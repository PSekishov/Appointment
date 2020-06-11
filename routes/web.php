<?php

use Illuminate\Support\Facades\Auth;
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

auth::routes();

Route::get('/', 'HomeController@home')->name('home');
Route::get('/about', 'AboutController@about')->name('about');
Route::get('/service', 'ServiceController@service')->name('service');
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::get('/cabinet','CabinetController@cabinet')->name('cabinet');

Route::get('/admin', 'Admin\AdminController@index');


