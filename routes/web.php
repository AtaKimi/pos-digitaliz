<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tenant\DeskController;
use App\Http\Controllers\Tenant\OrderController;
use App\Http\Controllers\Tenant\TenantController;
use App\Http\Controllers\Waiter\WaiterController;
use App\Http\Controllers\Tenant\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Tenant\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TenantServicePaymentController;

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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes for admin
    Route::middleware('can:admin-access')->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('/admin', 'index')->name('admin-index');
            Route::get('/admin/tenant-management', 'tenantManagement')->name('admin-tenant-management');
            Route::get('/admin/tenant-detail', function () {
                return view('admin.tenant-detail');
            })->name('admin-detail');
        });
    });
    Route::middleware('can:tenant-access')->group(function () {
        Route::prefix('tenant')->group(function () {
            Route::controller(TenantController::class)->group(function () {
                Route::get('{tenant}/', 'index')->name('tenant-index');
                Route::get('{tenant}/setting', 'setting')->name('tenant-setting');
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
    });
});


// Routes for waiter

Route::prefix('waiter')->group(function(){
    Route::controller(WaiterController::class)->group(function () {
        Route::get('/', 'indexWaiter')->name('waiter-index');
    });
});

Route::prefix('costumer')->group(function(){
    Route::controller(CustomerController::class)->group(function () {
        Route::get('/', 'index')->name('customer-index');
        Route::get('/cart', 'cart')->name('customer-cart');
        Route::get('/menu', 'menu')->name('customer-menu');
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

require __DIR__ . '/auth.php';
