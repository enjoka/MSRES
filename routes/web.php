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

Route::resource('courses','CoursesController');
Route::resource('regions','RegionsController');
Route::resource('results','resultcontroller');
Route::resource('candidates','candidatecontroller');
Route::resource('districts','districtcontroller');
Route::resource('centres','centrecontroller');
Route::resource('results','resultcontroller');
