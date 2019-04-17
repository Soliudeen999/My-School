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
    return view('homepage.pages.notice');
});

Route::get('/notice-board', function () {
    return view('homepage.pages.notice');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login/staff', 'Auth\LoginController@showStaffLoginForm');
Route::get('/login/parent', 'Auth\LoginController@showParentLoginForm');
Route::get('/login/student', 'Auth\LoginController@showStudentLoginForm');
Route::get('/register/staff', 'Auth\RegisterController@showStaffRegisterForm');
Route::get('/register/parent', 'Auth\RegisterController@showParentRegisterForm');
Route::get('/register/student', 'Auth\RegisterController@showStudentRegisterForm');

Route::post('/login/staff', 'Auth\LoginController@staffLogin');
Route::post('/login/parent', 'Auth\LoginController@parentLogin');
Route::post('/login/student', 'Auth\LoginController@studentLogin');
Route::post('/register/staff', 'Auth\RegisterController@createStaff');
Route::post('/register/parent', 'Auth\RegisterController@createParent');
Route::post('/register/student', 'Auth\RegisterController@createStudent');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/parent', 'parent');
