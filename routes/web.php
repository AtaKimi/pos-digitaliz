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
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'index')->name('admin-index');
    Route::get('/admin/tenant-management', 'tenantManagement')->name('admin-tenant-management');
    Route::get('/admin/tenant-detail', function () {
        return view('admin.tenant-detail');
    })->name('admin-detail');
});


// Routes for tenant
Route::controller(TenantController::class)->group(function () {
    Route::get('/tenant', 'index')->name('tenant-index');
    Route::get('/tenant/order', function () {
        return view('tenant.order');
    })->name('tenant-order');
    Route::get('/tenant/order/detail/', 'tenantOrderDetail')->name('tenant-index');
    Route::get('/tenant/product', function () {
        return view('tenant-product');
    })->name('tenant-product');

});


// Routes for waiter
Route::controller(WaiterController::class)->group(function () {
    Route::get('/waiter', 'index')->name('waiter-index');
});
