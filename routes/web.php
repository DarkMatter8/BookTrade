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

Route::post('/ServiceLogin', 'AuthController@do_login');

Route::get('/student/home','StudentController@show_home');
Route::get('/student/sell','StudentController@show_sell');

Route::get('/getSubjects/{sem}/{branch}',function($sem,$branch){

	$sub = Subject::where('semester',$sem)->where('branch', $branch)->pluck('name');
	return $sub;

});