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
Route::get('candidates/importExport','CandidatesController@importExport');
Route::get('downloadExcel/{type}', 'CandidatesController@downloadExcel');
Route::post('importExcel', 'CandidatesController@importExcel');
Route::resource('candidates','CandidatesController');
Route::resource('districts','DistrictsController');
Route::resource('centres','CentresController');
Route::resource('results','ResultsController');
