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
*/

Route::get('/', 'homeController@index')->name('home');

//static page

Route::get('/privacy-policy', 'StaticPageController@privacyPolicy')->name('static.privacy');
Route::get('/lavora-con-noi', 'StaticPageController@workWithUs')->name('static.work_with_us');


/*
Route::get('/il-corso', 'StaticPageController@course')->name('static.course');
Route::get('/dopo-il-corso', 'StaticPageController@afterCourse')->name('static.after_course');
Route::get('/faq', 'StaticPageController@faq')->name('static.faq');
*/
