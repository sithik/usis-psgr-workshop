<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;
use App\Http\Controllers\EventsController;

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

Route::get('/hello/world', [TestController::class, 'show']);

Route::get('/events/register', [EventsController::class, 'register']);

Route::post('/events/register_action', [EventsController::class, 'register_action']);
