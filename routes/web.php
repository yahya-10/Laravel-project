<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;

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

// Route::get('/', function () {
//     return view('Client.home');
// });

Route::get('/', 'App\Http\Controllers\TemplateController@index');
Route::get('/about', 'App\Http\Controllers\TemplateController@about');
Route::get('/contact', 'App\Http\Controllers\TemplateController@contact');
Route::get('/gallery', 'App\Http\Controllers\TemplateController@gallery');
// Route::get('/menu', 'App\Http\Controllers\TemplateController@menu');

// Route::get('/test', 'App\Http\Controllers\ItemsController@test');

Route::get('menu', [ItemsController::class, 'show']);