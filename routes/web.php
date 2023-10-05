<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\TenantController as AdminTenantController;
use App\Http\Controllers\Admin\AdminController as AdminController;
use App\Http\Controllers\Costumer\CartController as CustomerCartController;
use App\Http\Controllers\Tenant\DeskController as TenantDeskController;
use App\Http\Controllers\Tenant\OrderController as TenantOrderController;
use App\Http\Controllers\Tenant\TenantController as TenantTenantController;
use App\Http\Controllers\Tenant\WaiterController as TenantWaiterController;
use App\Http\Controllers\Waiter\WaiterController as WaiterWaiterController;
use App\Http\Controllers\Tenant\ProductController as TenantProductController;
use App\Http\Controllers\Tenant\CategoryController as TenantCategoryController;
use App\Http\Controllers\Costumer\CustomerController as CustomerCustomerController;
use App\Http\Controllers\Tenant\TenantServicePaymentController as TenantTenantSErvicePaymentController;


use App\Http\Controllers\ProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are        aded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Routes for landing page
Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes for admin
    Route::prefix('admin')->group(function () {
        Route::middleware('can:admin-access')->group(function () {
            Route::controller(AdminController::class)->group(function () {
                Route::get('/', 'index')->name('admin-index');

            });
            Route::controller(AdminTenantController::class)->group(function () {
                Route::prefix('tenant')->group(function () {
                    Route::get('/', 'index')->name('admin-tenant-index');
                    Route::get('detail/{tenant}', 'show')->name('admin-tenant-show');
                });
            });
        });
    });

    Route::middleware('can:tenant-access')->group(function () {
        Route::prefix('tenant')->group(function () {
            Route::controller(TenantTenantController::class)->group(function () {
                Route::get('{tenant}/', 'index')->name('tenant-index');
                Route::get('{tenant}/setting', 'setting')->name('tenant-setting');
            });

            Route::controller(TenantCategoryController::class)->group(function () {
                Route::get('{tenant}/category', 'index')->name('tenant-category-index');
            });

            Route::controller(TenantOrderController::class)->group(function () {
                Route::get('{tenant}/order', 'index')->name('tenant-order-index');
                Route::get('{tenant}/order/detail', 'show')->name('tenant-order-show');
            });

            Route::controller(TenantProductController::class)->group(function () {
                Route::get('{tenant}/product', 'index')->name('tenant-product-index');
                Route::get('{tenant}/product/create', 'create')->name('tenant-product-create');
            });

            Route::controller(TenantTenantSErvicePaymentController::class)->group(function () {
                Route::get('{tenant}/service-payment', 'index')->name('tenant-service-payment-index');
            });

            Route::controller(TenantDeskController::class)->group(function () {
                Route::get('{tenant}/desk', 'index')->name('tenant-desk-index');
            });
            Route::controller(TenantWaiterController::class)->group(function () {
                Route::get('{tenant}/waiter', 'index')->name('tenant-waiter-index');
            });
        });
    });
});

// Routes for waiter

Route::prefix('waiter')->middleware('can:waiter-access')->group(function () {
    Route::controller(WaiterWaiterController::class)->group(function () {
        Route::get('{tenant}/', 'index')->name('waiter-index');
        Route::get('{tenant}/detail-order', 'show')->name('waiter-show');
    });
});

Route::prefix('customer')->group(function () {
    Route::controller(CustomerCustomerController::class)->group(function () {
        Route::get('/', 'index')->name('customer-index');
        Route::get('/menu', 'menu')->name('customer-menu');
    });

    Route::prefix('cart')->group(function () {
        Route::controller(CustomerCartController::class)->group(function () {
            Route::get('/', 'index')->name('customer-cart');
        });
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
