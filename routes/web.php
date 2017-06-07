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

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/organization/{id}', 'OrganizationController@index')->name('organizations');
Route::middleware('auth')->get('/api/v1/org/create', 'Api\V1\OrganizationController@create')->name('createOrg');
Route::middleware('auth')->post('/api/v1/org/store', 'Api\V1\OrganizationController@store')->name('storeOrg');
Route::middleware('auth')->get('/api/v1/org/edit/{id}', 'Api\V1\OrganizationController@edit')->name('editOrg');
Route::middleware('auth')->post('/api/v1/org/update/{id}', 'Api\V1\OrganizationController@update')->name('updateOrg');
Route::middleware('auth')->delete('/api/v1/org/delete/{id}', 'Api\V1\OrganizationController@delete')->name('deleteOrg');

Route::get('/project/{id}', 'ProjectController@index')->name('projects');
Route::middleware('auth')->get('/api/v1/project/create/{type}/{id}', 'Api\V1\ProjectController@create')->name('createProject');
Route::middleware('auth')->post('/api/v1/project/store', 'Api\V1\ProjectController@store')->name('storeProject');
Route::middleware('auth')->get('/api/v1/project/edit/{id}', 'Api\V1\ProjectController@edit')->name('editProject');
Route::middleware('auth')->post('/api/v1/project/update/{id}', 'Api\V1\ProjectController@update')->name('updateProject');
Route::middleware('auth')->delete('/api/v1/project/delete/{id}', 'Api\V1\ProjectController@delete')->name('deleteProject');

Route::get('/sprint/{id}', 'SprintController@index')->name('sprints');
Route::middleware('auth')->get('/api/v1/sprint/create/{id}', 'Api\V1\SprintController@create')->name('createSprint');
Route::middleware('auth')->post('/api/v1/sprint/store', 'Api\V1\SprintController@store')->name('storeSprint');
Route::middleware('auth')->get('/api/v1/sprint/edit/{id}', 'Api\V1\SprintController@edit')->name('editSprint');
Route::middleware('auth')->post('/api/v1/sprint/update/{id}', 'Api\V1\SprintController@update')->name('updateSprint');
Route::middleware('auth')->delete('/api/v1/sprint/delete/{id}', 'Api\V1\SprintController@delete')->name('deleteSprint');