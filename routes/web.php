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
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/dashboard/client', 'HomeController@client')->name('dashboard.client');
Route::get('/dashboard/team', 'HomeController@team')->name('dashboard.team');

Route::get('/campaign/details/{id}', 'CampaignController@details')->name('campaign.details');
Route::get('/campaign/update/{id}', 'CampaignController@update')->name('campaign.update');

Route::post('/campaign/{client_name}/details/{id}', 'ClientController@index')->name('client.show');

Route::get('/campaigns', 'CampaignController@index')->name('campaigns');
Route::get('/campaigns/create', 'CampaignController@create')->name('campaign.create');
Route::post('/campaigns/store', 'CampaignController@store')->name('campaign.store');
Route::get('/campaigns/view/{id}', 'CampaignController@show')->name('campaign.show');

Route::get('/stock/create/{id}', 'StockController@create')->name('stock.create');
Route::post('/stock/refil', 'StockController@refil')->name('stock.refil');
Route::post('/stock/{id}', 'StockController@details')->name('stock.details');

Route::post('/clockin', 'ProcessController@clockIn')->name('clockin');
Route::get('/clockout/{user}/{campaign}/{ledger_id}', 'ProcessController@clockOut')->name('clockout');

Route::get('/users', 'UserController@index')->name('users');
Route::post('user/create', 'UserController@create')->name('team.create');

Route::get('/stock/record/{id}', 'StockController@record')->name('stock.record');

Route::get('/report/{id}', 'ReportController@index')->name('report');

Route::get('/client', function () {
    return view('clients.index');
});

