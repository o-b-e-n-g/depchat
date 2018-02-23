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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('members/{members}/{request}', 'MembersController@setPin');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('channels/view/', 'ChannelsController@view');

Route::get('messages/course/', 'MessagesController@messageCourse');

Route::get('messages/levels/', 'MessagesController@messageLevels');



Route::post('messages/save/', 'MessagesController@save');

Route::resource('channels', 'ChannelsController');

Route::resource('messages', 'MessagesController');

Route::resource('courses', 'CoursesController');

Route::resource('members', 'MembersController');



//Route::resource('members', 'MembersController');

Route::get('channels/course/{id}', 'ChannelsController@course');

Route::get('channels/view/{id}', 'ChannelsController@views');



//Route::get('channels/store', 'ChannelsController@create');
