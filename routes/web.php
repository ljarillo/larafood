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

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function (){

        Route::any('plans/search', 'PlanController@search')->name('plans.search');
        Route::resource('plans', PlanController::class);

        Route::get('/', 'PlanController@index')->name('admin.index');
});




Route::get('/', function () {
    return view('welcome');
});
