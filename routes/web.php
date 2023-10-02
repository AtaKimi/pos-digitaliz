<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\WaiterController;
use App\Http\Controllers\DeskController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TenantServicePaymentController;
use App\Models\Order;
use App\Models\TenantServicePayment;
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

Route::prefix('tenant')->group(function () {
    Route::controller(TenantController::class)->group(function () {
        Route::get('/', 'index')->name('tenant-index');
        Route::get('/setting', 'setting')->name('tenant-setting');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'index')->name('tenant-category-index');
    });

    Route::controller(OrderController::class)->group(function () {
        Route::get('/order', 'index')->name('tenant-order-index');
        Route::get('/order/detail', 'show')->name('tenant-order-show');
    });

    Route::controller(ProductController::class)->group(function () {
        Route::get('/product', 'index')->name('tenant-product-index');
        Route::get('/product/create', 'create')->name('tenant-product-create');
    });

    Route::controller(TenantServicePaymentController::class)->group(function () {
        Route::get('/service-payment', 'index')->name('tenant-service-payment-index');
    });

    Route::controller(DeskController::class)->group(function () {
        Route::get('/desk', 'index')->name('tenant-desk-index');
    });
    Route::controller(WaiterController::class)->group(function () {
        Route::get('/waiter', 'indexTenant')->name('tenant-waiter-index');
    });
});

// Routes for waiter

Route::prefix('waiter')->group(function () {
    Route::controller(WaiterController::class)->group(function () {
        Route::get('/', 'indexWaiter')->name('waiter-index');
    });
});

Route::prefix('waiter/detail')->group(function () {
    Route::controller(WaiterController::class)->group(function () {
        Route::get('/', 'indexTenant')->name('waiter-index');
    });
});

Route::prefix('costumer')->group(function () {
    Route::controller(CustomerController::class)->group(function () {
        Route::get('/', 'index')->name('customer-index');
        Route::get('/cart', 'cart')->name('customer-cart');
    });
});

























// Routes for tenant
// Route::controller(TenantController::class)->group(function () {
//     Route::get('/tenant', 'index')->name('tenant-index');
//     Route::get('/tenant/order', function () {
//         return view('tenant.order');
//     })->name('tenant-order');
//     Route::get('/tenant/category', 'category')->name('tenant-category');
//     Route::get('/tenant/order/detail/', 'tenantOrderDetail')->name('tenant-index');
//     Route::get('/tenant/product', function () {
//         return view('tenant.product');
//     })->name('tenant-product');
//     Route::get('/tenant/service-payment', 'servicePayment')->name('tenant-payment');
//     Route::get('/tenant/product/form', 'formProduct')->name('tenant-form-product');
//     Route::get('/tenant/setting', 'setting')->name('tenant-setting');
//     Route::get('/tenant/desk', function () {
//         return view('tenant.desk');
//     })->name('tenant-desk');
// });
