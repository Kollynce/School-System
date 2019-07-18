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

Route::group(['middleware' => 'auth'], function(){
    Route::get('/layouts.dashboard', function () {
        return view('layouts.dashboard');
    });
});

Auth::routes();

Route::resource('/users', 'UserController');
Route::resource('profile', 'ProfileController');
Route::resource('units', 'UnitController');
Route::resource('regunits', 'RegUnitController');
Route::resource('attendance', 'AttendanceController');
Route::resource('exams', 'ExamsController');
Route::resource('cat1', 'Cat1Controller');
Route::resource('cat2', 'Cat2Controller');
Route::resource('mainexam', 'MainExamController');

Route::get('downloads/{id}',[
    'as' => 'download.file', 'uses' => 'DownloadController@downloadFile']);
Route::resource('downloads', 'DownloadController');

Route::get('assignments/{id}',[
    'as' => 'assignment.file', 'uses' => 'AssignmentController@assignmentFile']);
Route::resource('assignments', 'AssignmentController');

Route::get('calendar.index', function () {
    return view('calendar.index');
});
