<?php

use Maatwebsite\Excel\Facades\Excel;
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



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('reports', function () {
    return view('reports');
});

Route::get('motors/export/', 'MotorExportController@export');

Route::get('motorreport', 'MotorReportController@export');

Route::get('/vendor/voyager/reports', 'ReportController@report');

