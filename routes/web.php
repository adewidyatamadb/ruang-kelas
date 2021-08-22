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
    return redirect(route('admin.dashboard'));
});

Route::get("admin-panel/dashboard", DashboardController::class)->name('admin.dashboard');

Route::get('admin-panel/administrator', [AdministratorController::class, 'index'])->name('administrator.index');

Route::prefix('admin-panel/administrator/')->name('administrator.')->group(function () {
    Route::get('create', [AdministratorController::class, 'create'])->name('create');
    Route::post('store', [AdministratorController::class, 'store'])->name('store');
    Route::get('edit/{id}', [AdministratorController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [AdministratorController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [AdministratorController::class, 'destroy'])->name('delete');
});
