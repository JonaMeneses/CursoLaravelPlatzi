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

Route::get('/', 'HomeController@index');

Route::get('/dashboard','DashboardController@index');

Route::resource('/expense_reports','ExpenseReportController');

Route::get('/expense_reports/{id}/ConfirmDelete','ExpenseReportController@ConfirmDelete');
Route::get('/expense_reports/{id}/ConfirmSendMail','ExpenseReportController@ConfirmSendMail');
Route::post('/expense_reports/{id}/sendMail','ExpenseReportController@sendMail');



Route::get('/expense_reports/{expense_report}/expenses/create','ExpenseController@Create');

Route::post('/expense_reports/{expense_report}/expenses','ExpenseController@Store');

