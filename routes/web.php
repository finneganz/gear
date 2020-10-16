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
Auth::routes(['verify' => true]);

// 1. ユーザー利用画面
// 1.1 Top（ユーザーリスト一覧）
Route::get('/', 'UserController@showUserList');
// 1.2 ユーザー登録
Route::get('/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/register', 'Auth\RegisterController@register');
// 1.3 ログイン
Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@login');
// 1.4 ユーザー情報表示・編集
Route::get('/users/{username}', 'UserController@showUserPage');
Route::get('/users/{username}/edit', 'UserController@showUserEditPage');
Route::post('/users/{username}/edit', 'UserController@editUser');
// 1.5 デバイス一覧
Route::get('/devices', 'DeviceController@showDeviceList');
Route::get('/devices/{device}', 'DeviceController@showDeviceGenre');
Route::get('/devices/{device}/{maker}/{product}', 'DeviceController@showDeviceProduct');
// 1.6 静的ページ
Route::get('/about', 'StaticsController@showAbout');
Route::get('/policy', 'StaticsController@showPolicy');
Route::get('/contact', 'StaticsController@showContact');
Route::post('/contact', 'StaticsController@contact');

// 2. 管理画面
// 2.1 デバイス
// 登録
Route::get('/device/add', 'DeviceController@showDeviceAddPage');
Route::post('/device/add', 'DeviceController@addDevice');
// 編集
Route::get('/devices/{device}/{maker}/{product}/edit', 'DeviceController@showDeviceEditPage');
Route::post('/devices/{device}/{maker}/{product}/edit', 'DeviceController@editDevice');

// 2.2 メーカー
// 登録
Route::get('/makers', 'MakerController@showMakersList');
Route::get('/maker/add', 'MakerController@showMakerAddPage');
Route::post('/maker/add', 'MakerController@addMaker');
// 編集
Route::get('/maker/{makername}/edit', 'MakerController@showMakerEditPage');
Route::post('/maker/{makername}/edit', 'MakerController@editMaker');




