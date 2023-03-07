<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\helloController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TokoController;

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

// Route::get('hello', 'App\Http\Controllers\helloController@index');
// Route::get('hello', [helloController::class, 'index']);
// Route::get('world', [helloController::class, 'world_message']);
// Route::get('welcome', [helloController::class, 'welcome']);
Route::get('toko' , [TokoController::class , 'index']);


?>