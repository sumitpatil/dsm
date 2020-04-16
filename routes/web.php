<?php

use Illuminate\Support\Facades\Route;

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

//installtion module
Route::get('/installation','MasterMahagencoLocationUnitStageCapacityController@index');
Route::post('/installation/create','MasterMahagencoLocationUnitStageCapacityController@create')->name('installation.create');
Route::post('/installation/show','MasterMahagencoLocationUnitStageCapacityController@show')->name('installation.show');
Route::post('/installation/store','MasterMahagencoLocationUnitStageCapacityController@store')->name('installation.store');


Route::get('/installation/master','MasterUnitStageCapacityController@index')->name('master.index');
Route::post('/installation/master/insert','MasterUnitStageCapacityController@insert')->name('master.insert');

//testing code
Route::get('/create-table', 'TableController@operate');
