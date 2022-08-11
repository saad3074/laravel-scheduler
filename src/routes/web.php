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

// Summary
Route::get('/stats', '\tearsilent\LaravelScheduler\Controllers\StatisticsController@summary')->name('visitortracker.summary');

// Visits
Route::get('/stats/all', '\tearsilent\LaravelScheduler\Controllers\StatisticsController@allRequests')->name('visitortracker.all_requests');
Route::get('/stats/visits', '\tearsilent\LaravelScheduler\Controllers\StatisticsController@visits')->name('visitortracker.visits');
Route::get('/stats/ajax', '\tearsilent\LaravelScheduler\Controllers\StatisticsController@ajaxRequests')->name('visitortracker.ajax_requests');
Route::get('/stats/bots', '\tearsilent\LaravelScheduler\Controllers\StatisticsController@bots')->name('visitortracker.bots');
Route::get('/stats/login-attempts', '\tearsilent\LaravelScheduler\Controllers\StatisticsController@loginAttempts')->name('visitortracker.login_attempts');

// Grouped visits
Route::get('/stats/countries', '\tearsilent\LaravelScheduler\Controllers\StatisticsController@countries')->name('visitortracker.countries');
Route::get('/stats/os', '\tearsilent\LaravelScheduler\Controllers\StatisticsController@os')->name('visitortracker.os');
Route::get('/stats/browsers', '\tearsilent\LaravelScheduler\Controllers\StatisticsController@browsers')->name('visitortracker.browsers');
Route::get('/stats/languages', '\tearsilent\LaravelScheduler\Controllers\StatisticsController@languages')->name('visitortracker.languages');
Route::get('/stats/unique', '\tearsilent\LaravelScheduler\Controllers\StatisticsController@unique')->name('visitortracker.unique');
Route::get('/stats/users', '\tearsilent\LaravelScheduler\Controllers\StatisticsController@users')->name('visitortracker.users');
Route::get('/stats/urls', '\tearsilent\LaravelScheduler\Controllers\StatisticsController@urls')->name('visitortracker.urls');