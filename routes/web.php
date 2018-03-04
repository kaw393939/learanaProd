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

Auth::routes();
Route::get('/', 'CourseController@UserCourses')->name('guest');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/course/index', 'CourseController@index')->name('course.index');
Route::get('/resource/index', 'ResourceController@index')->name('resource.index');
Route::get('/user/index', 'UserController@index')->name('user.index');
Route::get('/section/index', 'SectionController@index')->name('section.index');

//Resource Controllers to create new
Route::get('/course/new', 'CourseController@create')->name('course.create');
Route::get('/course/{course}/resource/new', 'ResourceController@create')->name('resource.create');
Route::get('/course/{course}/section/new', 'SectionController@create')->name('section.create');
Route::get('/course/{course}/section/{section}/register/new/', 'RegistrationController@create')->name('registration.create');

//routes to store new records
Route::post('/course', 'CourseController@store')->name('course.store');
Route::post('/course/{course}/resource', 'ResourceController@store')->name('resource.store');
Route::post('/course/{course}/section', 'SectionController@store')->name('section.store');
Route::post('/course/{course}/section/{section}/registration', 'RegistrationController@store')->name('registration.store');
//routes to show a record
Route::get('/course/{course}', 'CourseController@show')->name('course.show');
Route::get('/course/{course}/resource/{resource}', 'ResourceController@show')->name('resource.show');
Route::get('/course/{course}/section/{section}', 'SectionController@show')->name('section.show');
Route::get('/course/{course}/section/{section}/registration/{registration}', 'RegistrationController@show')->name('registration.show');
//routes to edit a record
Route::get('/course/{course}/edit', 'CourseController@edit')->name('course.edit');
Route::get('/course/{course}/resource/{resource}/edit', 'ResourceController@edit')->name('resource.edit');
Route::get('/course/{course}/section/{section}/edit', 'SectionController@edit')->name('section.edit');
Route::get('/course/{course}/section/{section}/registration/{registration}/edit', 'RegistrationController@edit')->name('registration.edit');
//routes to update a record
Route::patch('/courses/{course}/', 'CourseController@update')->name('course.update');
Route::patch('/courses/{course}/resource/{resource}', 'ResourceController@update')->name('resource.update');
Route::patch('/courses/{course}/section/{section}', 'SectionController@update')->name('section.update');
Route::patch('/courses/{course}/section/{section}/registration/{registration}', 'SectionController@update')->name('registration.update');
//routes to delete a record
Route::delete('/courses/{course}', 'CourseController@destroy')->name('course.destroy');
Route::delete('/courses/{course}/resource/{resource}', 'ResourceController@destroy')->name('resource.destroy');
Route::delete('/courses/{course}/sections/{section}', 'SectionController@destroy')->name('section.destroy');
Route::delete('/courses/{course}/sections/{section}/registration/{registration}', 'RegistrationController@destroy')->name('registration.destroy');
//routes to show an index list of records
//Route::get('/courses/{course}/resource/index', 'ResourceController@index')->name('resource.index');
Route::get('/course/{course}/section/{section}/registration/index', 'RegistrationController@index')->name('registration.index');


Route::get('/user/{user_id}', 'UserController@show')->name('user.show');



