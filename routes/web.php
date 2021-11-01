<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

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


Route::get('/', [App\Http\Controllers\RouteController::class, 'home'])->name('home');
Route::get('/godkiller', [App\Http\Controllers\RouteController::class, 'godkiller'])->name('godkiller');
Route::get('/long-exile', [App\Http\Controllers\RouteController::class, 'longexile'])->name('longexile');
Route::get('/akkord', [App\Http\Controllers\RouteController::class, 'akkord'])->name('akkord');
Route::get('/demon', [App\Http\Controllers\RouteController::class, 'demon'])->name('demon');
Route::get('/leviathan', [App\Http\Controllers\RouteController::class, 'leviathan'])->name('leviathan');
Route::get('/fallen-angel', [App\Http\Controllers\RouteController::class, 'fallenangel'])->name('fallen-angel');
Route::get('/{slug}', [App\Http\Controllers\RouteController::class, 'home'])->name('home');