<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\DashboardController;
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

Route::get("admin-panel/dashboard", [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('admin-panel/administrator', [AdministratorController::class, 'index'])->name('administrator.index');

Route::prefix('admin-panel/administrator/')->name('administrator.')->group(function () {

    Route::get('show/{id}', [AdministratorController::class, 'show'])->name('show');
});
