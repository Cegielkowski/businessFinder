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
    return view('index');
});
Route::get('company/searchCompany/{data}', 'CompanyController@searchCompany');
Route::resource('User', 'UserController');
Route::resource('company', 'CompanyController');
Route::delete('/{id}', 'CompanyController@destroy');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
