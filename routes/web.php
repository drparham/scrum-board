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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/organization/{id}', 'OrganizationController@index')->name('organizations');
Route::middleware('auth')->get('/api/v1/org/create', 'Api\V1\OrganizationController@create')->name('createOrg');
Route::middleware('auth')->get('/api/v1/org/edit', 'Api\V1\OrganizationController@edit')->name('editOrg');
Route::middleware('auth')->post('/api/v1/org/store', 'Api\V1\OrganizationController@store')->name('storeOrg');
Route::middleware('auth')->post('/api/v1/org/update', 'Api\V1\OrganizationController@update')->name('updateOrg');
Route::middleware('auth')->delete('/api/v1/org/delete', 'Api\V1\OrganizationController@delete')->name('deleteOrg');