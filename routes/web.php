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

Route::get('/register', 'Auth\RegisterController@showRegisterPage');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@login');

Route::get('/{username}', 'UserController@showUserPage');
Route::get('/{username}/edit', 'UserController@showUserEditPage');
Route::post('/{username}/edit', 'UserController@editUser');

Route::get('/devices', 'DeviceController@showDevicesList');
Route::get('/devices/{device}/{maker}/{product}', 'DeviceController@showDeviceProduct');

Route::get('/about', 'StaticsController@showAbout');
Route::get('/policy', 'StaticsController@showPolicy');
Route::get('/contact', 'StaticsController@showContact');
Route::post('/contact', 'StaticsController@contact');

// Admin Page
Route::get('/devices/{device}/{maker}/{product}/edit', 'DeviceController@showDeviceEditPage');
Route::post('/devices/{device}/{maker}/{product}/edit', 'DeviceController@editDevice');
Route::get('/device/add', 'DeviceController@showDeviceAddPage');
Route::post('/device/add', 'DeviceController@addDevice');

Route::get('/makers', 'MakerController@showMakersList');
Route::get('/maker/add', 'MakerController@showMakerAddPage');
Route::post('/maker/add', 'MakerController@addMaker');
Route::get('/maker/edit', 'MakerController@showMakerEditPage');
Route::post('/maker/edit', 'MakerController@editMaker');




