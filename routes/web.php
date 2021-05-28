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

Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index')->middleware('auth');

// Landing Page
Route::get('/', 'Landing_IndexController@index')->name('landing.index');

//About Us
Route::get('/aboutus', 'AboutUsController@index')->name('aboutUs.index')->middleware('auth');

//Mission
Route::get('/aboutus/mission/create', 'missionController@create')->name('mission.create')->middleware('auth');
Route::post('/aboutus/mission/store', 'missionController@store')->name('mission.store')->middleware('auth');
Route::get('/aboutus/mission/edit/{id}', 'missionController@edit')->name('mission.edit')->middleware('auth');
Route::put('/aboutus/mission/update/{id}', 'missionController@update')->name('mission.update')->middleware('auth');
Route::delete('/aboutus/mission/{mission}', 'missionController@destroy')->name('mission.destroy')->middleware('auth');

//Vision
Route::get('/aboutus/vision/create', 'visionController@create')->name('vision.create')->middleware('auth');
Route::post('/aboutus/vision/store', 'visionController@store')->name('vision.store')->middleware('auth');
Route::get('/aboutus/vision/edit/{id}', 'visionController@edit')->name('vision.edit')->middleware('auth');
Route::put('/aboutus/vision/update/{id}', 'visionController@update')->name('vision.update')->middleware('auth');
Route::delete('/aboutus/vision/{vision}', 'visionController@destroy')->name('vision.destroy')->middleware('auth');


//Album
Route::get('/album/view', 'AlbumController@index')->name('album.index')->middleware('auth');

//Social Services
Route::get('/socialServices', 'socialServicesController@index')->name('socialServices.index')->middleware('auth');
Route::get('/socialServices/create', 'socialServicesController@create')->name('socialServices.create')->middleware('auth');
Route::post('/socialServices/store', 'socialServicesController@store')->name('socialServices.store')->middleware('auth');
Route::get('/socialServices/edit/{id}', 'socialServicesController@edit')->name('socialServices.edit')->middleware('auth');
Route::put('/socialServices/update/{id}', 'socialServicesController@update')->name('socialServices.update')->middleware('auth');
Route::delete('/socialServices/{socialService}', 'socialServicesController@destroy')->name('socialServices.destroy')->middleware('auth');

//Organizational Chart
Route::get('/organization', 'OrganizationController@index')->name('organization.index')->middleware('auth');
Route::get('/organization/create', 'OrganizationController@create')->name('organization.create')->middleware('auth');
Route::post('/organization/store', 'OrganizationController@store')->name('organization.store')->middleware('auth');
Route::get('organization/edit/{id}', 'OrganizationController@edit')->name('organization.edit')->middleware('auth');
Route::put('/organization/{id}', 'OrganizationController@update')->name('organization.update')->middleware('auth');
Route::delete('/organization/{organization}', 'OrganizationController@destroy')->name('organization.destroy')->middleware('auth');

//Calendar of Activities
Route::get('/calendarOfActivities', 'CalendarController@index')->name('calendar.index')->middleware('auth');
Route::get('/calendarOfActivities/create', 'CalendarController@create')->name('calendar.create')->middleware('auth');
Route::post('/calendarOfActivities/store', 'CalendarController@store')->name('calendar.store')->middleware('auth');
Route::get('/calendarOfActivities/edit/{id}', 'CalendarController@edit')->name('calendar.edit')->middleware('auth');
Route::put('/calendarOfActivities/{calendarOfAct}', 'CalendarController@update')->name('calendar.update')->middleware('auth');
Route::delete('/calendarOfActivities/{calendarOfAct}', 'CalendarController@destroy')->name('calendar.destroy')->middleware('auth');

//Contacts
Route::get('/contacts', 'ContactsController@index')->name('contact.index')->middleware('auth');
Route::get('/contacts/edit/{id}', 'ContactsController@edit')->name('contact.edit')->middleware('auth');
Route::put('/contacts/update/{id}', 'ContactsController@update')->name('contact.update')->middleware('auth');

//Gallery
Route::get('/gallery', 'GalleryController@index')->name('gallery.index')->middleware('auth');
Route::get('/gallery/create', 'GalleryController@create')->name('gallery.create')->middleware('auth');
Route::post('/gallery/store', 'GalleryController@store')->name('gallery.store')->middleware('auth');
Route::get('/gallery/edit/{id}', 'GalleryController@edit')->name('gallery.edit')->middleware('auth');
Route::put('/gallery/{gallery}', 'GalleryController@update')->name('gallery.update')->middleware('auth');
Route::delete('/gallery/{gallery}', 'GalleryController@destroy')->name('gallery.destroy')->middleware('auth');

//Log-in
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');
