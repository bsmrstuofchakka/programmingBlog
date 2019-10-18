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




Route::get('/test', function () {

	$arr= array(3,5,'Kamal','Dhaka');

	return $arr;
});


Route::get('/onnokichu', function(){

	return view('test '); 

});

Route::get('/vinnokichu', function() {

	return view('welcome');

});

Route::get('/hcontroller', 'HomeController@abc');
Route::get('/hcontroller', 'HomeController@testDisplayMethod');
Route::get('/history/{h}', 'HomeController@display' );


Route::get('/displayView', 'HomeController@displayV');

Route::get('dashboard', 'HomeController@displayDashboard');
Route::get('admin', 'HomeController@displayAdmin');
Route::get('login', 'HomeController@displayLogin');
Route::get('register', 'HomeController@displayRegister');




Route::get('admin10', 'adminController@index')->name('index');



Route::get('/', 'BlogController@displayWelcome');
Route::get('welcome2','BlogController@display2Welcome');

Route::get('blog10', 'BlogController@inputFormBlog');


//Route::get('settingsList','adminController@displaySettings');
Route::get('settings','adminController@listSettings');
Route::get('settings/add','adminController@addSettings');
Route::post('settings/save','adminController@saveSettings');
Route::get('settings/edit','adminController@editSettings');
Route::get('settings/delete','adminController@deleteSettings');
Route::get('settingsWelcome', 'adminController@welcomeSettings');





Route::get('blog12', 'BlogController@displayBlog2');

Route::get('/logout', 'LogoutController@displayLogout');



Route::get('blogs', 'BlogController@blogList');
Route::get('blog/add', 'BlogController@blogAdd');
Route::post('blog/save', 'BlogController@blogSave');
Route::get('blog/delete', 'BlogController@blogDelete');
Route::get('blog/edit', 'BlogController@blogEdit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
