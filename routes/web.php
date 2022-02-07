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

Route::get('/send-notification', 'App\Http\Controllers\NotificationController@sendNotification');
Route::get('/send-log', 'App\Http\Controllers\LogsController@sendLog')->middleware('App\Http\Middleware\LogMiddleware');
