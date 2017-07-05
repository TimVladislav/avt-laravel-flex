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
Route::middleware(['role:Admin'])->group(function () {
    Route::get('/admin/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/admin/users', 'AdminController@users')->name('users');
    Route::get('/admin/works', 'AdminController@works')->name('works');
    Route::get('/admin/profile/{user}', 'AdminController@profile')->name('profile');
});
Route::get('/works', 'WorkController@index')->name('work');

