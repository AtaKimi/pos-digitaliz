<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\WaiterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Routes for landing page
Route::get('/', function () {
    return view('landing');
});


// Routes for admin


Route::prefix('admin')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/', 'index')->name('admin-index');
        Route::get('/detail-tenant', 'detailTenant')->name('admin-detail-tenant');
    });
});

Route::prefix('tenant')->group(function () {
    Route::controller(TenantController::class)->group(function () {
        Route::get('/', 'index')->name('tenant-index');
        Route::get('/category', 'category')->name('tenant-category');
    });
});




// Routes for tenant


// Routes for waiter
Route::controller(WaiterController::class)->group(function () {
    Route::get('/waiter', 'index')->name('waiter-index');
});
