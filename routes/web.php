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

Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');

// Landing Page
Route::get('/', 'Landing_IndexController@index')->name('landing.index');
Route::get('/landing_page/main', 'Landing_MainController@index')->name('landing_main.index');

//About Us
Route::get('/about_us/aboutUs', 'AboutUsController@index')->name('about_us.index');
Route::get('/about_us/{ID}/edit', 'AboutUsController@edit')->name('about_us.edit');
Route::put('/about_us/update/{ID}','AboutUsController@update')->name('about_us.update');

//Album
Route::get('/album/view', 'AlbumController@index')->name('album.index');

//Organizational Chart
Route::get('/org_chart/org', 'OrgController@index')->name('org_chart.index');

