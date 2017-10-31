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

use App\Http\Middleware\RedirectIfAuthenticated;

Route::get('/', function () {
    return view('auth/login');
});



Route::get('students/see', ['as' => 'students.view', 'uses' => 'StudentsController@view']);


Route::group(['middleware'=>['auth']],function (){

    Route::get('/home', 'HomeController@index')->name('home');//->middleware(RedirectIfAuthenticated::class);

    Route::group(['middleware'=>['hasRole:'.\App\Models\UserPrivilege::ADMIN_ROLE]],function (){

        Route::resource('courses','CoursesController');
        Route::resource('regions','RegionsController');
        Route::get('candidates/importExpor','CandidatesController@importExpor');
        Route::get('downloadExce/{type}', 'CandidatesController@downloadExce');
        Route::post('importEx', 'CandidatesController@importEx');
        Route::resource('candidates','CandidatesController');
        Route::resource('districts','DistrictsController');
        Route::resource('centres','CentresController');

        Route::get('results/importExport','ResultsController@importExport');
        Route::get('downloadExcel/{type}', 'ResultsController@downloadExcel');
        Route::post('importExcel', 'ResultsController@importExcel');
        Route::get('results/remove', 'ResultsController@remove');
        Route::resource('results','ResultsController');

        Route::post('view-report','ReportsController@view')->name('view-report');
        Route::get('list-report','ReportsController@index')->name('report-index');
        Route::get('reportType/{type}', 'ReportsController@reportView');
        Route::get('pass-rate', 'Reports\\PassRatesByGenderController@index');

    });

    Route::group(['middleware'=>['hasRole:'.\App\Models\UserPrivilege::CANDIDATE_ROLE]],function (){

        Route::resource('students','StudentsController');
        Route::get('student-results','StudentResultsController@index');
        Route::post('view-results','StudentResultsController@view')->name('view-results');
        Route::get('student-results','StudentResultsController@index');
    });
});

Auth::routes();


Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');
