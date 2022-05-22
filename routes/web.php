<?php

use App\Http\Controllers\BaseStationController;
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

Route::get('/', static function () {
    return 'welcome';
});

Route::get('/greeting', static function () {
    return 'hey';
});

Route::get('/bs/{id}', [BaseStationController::class, 'show'])->name('bs.info');
Route::get('/bs', [BaseStationController::class, 'list'])->name('bs.list');
