<?php

use App\Subject;

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

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/logout','AuthController@do_logout');

Route::post('/signup', 'AuthController@do_register');

Route::post('/ServiceLogin', 'AuthController@do_login');

Route::post('/ChangeSettings', 'StudentController@change_settings');

Route::post('/ChangePassword', 'StudentController@change_password');

Route::post('/find', 'StudentController@find_book');

Route::post('/Remove', 'StudentController@remove');

Route::post('/addInterested', 'StudentController@add_interested');

Route::get('/findbyyear/{year}', 'StudentController@find_byyear');

Route::get('/student/settings', 'StudentController@show_settings');

Route::get('/findbybranch/{branch}', 'StudentController@find_bybranch');

Route::get('/student/home','StudentController@show_home');
Route::get('/student/sell','StudentController@show_sell');
Route::get('/student/buy','StudentController@show_buy');
Route::get('/student/activity','StudentController@show_activity');

Route::get('/getSubjects/{sem}/{branch}',function($sem,$branch){
	$sub = Subject::where('semester',$sem)->where('branch', $branch)->pluck('name');
	return $sub;
});

Route::post('/AddListing','StudentController@add_listing');

Route::post('/AddSubscription','StudentController@add_subscription');

Route::get('/student/ShowListings','StudentController@show_listing');