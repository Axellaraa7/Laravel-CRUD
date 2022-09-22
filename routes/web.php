<?php

use App\Http\Controllers\ScientistController;
use App\Http\Controllers\DiscoveryController;
use App\Http\Controllers\ScienceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

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
})->name('welcome');

Route::resources([
  'sciences' => ScienceController::class,
  'discoveries' => DiscoveryController::class,
  'scientists' => ScientistController::class
]);
