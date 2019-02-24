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

//navbar page

Route::get('/il-corso', 'CourseController@index')->name('course');
Route::get('/dopo-il-corso', 'AfterCourseController@index')->name('after_course');
Route::get('/faq', 'FaqController@index')->name('faq');
Route::get('/metodo', 'MetodController@index')->name('metod');
