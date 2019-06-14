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

// Complete Registration form route
Route::post('store/{id}', 'GuardianController@store')->name('saveProfile');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::get('/parent', 'GuardianController@index');
Route::get('/registration', 'GuardianController@registration')->name('createProfile');
Route::post('/edit_profile/{id}', 'GuardianController@update')->name('editProfile');
// view message and reply
Route::get('view-message/{message_id}/{status}/{controller}', 'MessageController@view_message')->name('viewMessage');


Route::get("message/{med}/{id}", "StudentController@message");
// Route::redire("StudentController", "StudentController@message");
// upload profile photo 
Route::post('/upload/{id}', 'GuardianController@upload')->name('upload');

// 
// Student route
// 
Route::resource('/student', 'StudentController');
// Registration 
Route::get('/student_registration', 'StudentController@registration')->name('createStudentProfile');
Route::post('/student_profile/{_id}', 'StudentController@update')->name('editStudentProfile');
// Route::get('/registration', 'StudentController@registration')->name('createProfile');



