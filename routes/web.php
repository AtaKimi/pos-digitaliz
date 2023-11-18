<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\TenantController as AdminTenantController;
use App\Http\Controllers\Admin\AdminController as AdminController;
use App\Http\Controllers\Tenant\DeskController as TenantDeskController;
use App\Http\Controllers\Tenant\OrderController as TenantOrderController;
use App\Http\Controllers\Tenant\TenantController as TenantTenantController;
use App\Http\Controllers\Tenant\WaiterController as TenantWaiterController;
use App\Http\Controllers\Waiter\WaiterController as WaiterWaiterController;
use App\Http\Controllers\Tenant\ProductController as TenantProductController;
use App\Http\Controllers\Tenant\CategoryController as TenantCategoryController;
use App\Http\Controllers\Tenant\TenantServicePaymentController as TenantTenantSErvicePaymentController;
use App\Http\Controllers\Costumer\CartController;
use App\Http\Controllers\Costumer\CustomerController;


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
            Route::prefix('tenant')->group(function () {
                Route::controller(AdminTenantController::class)->group(function () {
                    Route::get('/', 'index')->name('admin-tenant-index');
                    Route::post('', 'tenantServiceStore')->name('admin-tenant-service-store');
                    Route::delete('delete', 'destroy')->name('admin-tenant-destroy');
                    Route::get('{tenant}', 'show')->name('admin-tenant-show');
                    Route::put('{tenant}', 'update')->name('admin-tenant-update');
                    Route::post('{tenant}/update-service', 'updateService')->name('admin-tenant-update-service');
                });
            });
        });
    });

    Route::middleware('can:tenant-access')->group(function () {
        Route::prefix('tenant')->group(function () {
            Route::controller(TenantTenantController::class)->group(function () {
                Route::get('{tenant:code}/', 'index')->name('tenant-index');
                Route::get('{tenant:code}/setting', 'setting')->name('tenant-setting');
                Route::post('{tenant}/setting/update', 'updateSetting')->name('tenant-setting-update');
                Route::post('{tenant}/setting/update-profile-photo', 'updateProfilePhoto')->name('tenant-update-profile-photo');
                Route::post('{tenant}/setting/update-tax', 'updateTax')->name('tenant-update-tax');
            });

            Route::controller(TenantCategoryController::class)->group(function () {
                Route::get('{tenant:code}/category', 'index')->name('tenant-category-index');
                Route::post('{tenant}/category/store', 'store')->name('tenant-category-store');
                Route::post('{tenant}/category/edit', 'update')->name('tenant-category-edit');
                Route::delete('{tenant}/category/delete', 'destroy')->name('tenant-category-destroy');
            });

            Route::controller(TenantOrderController::class)->group(function () {
                Route::get('{tenant:code}/order', 'index')->name('tenant-order-index');
                Route::get('{tenant:code}/order/detail/{order:code}', 'show')->name('tenant-order-show')->withoutScopedBindings();
                Route::put('{tenant}/order/{order}/next-status', 'nextStatus')->name('tenant-order-next-status');
                Route::put('{tenant}/order/{order}/cancel', 'cancel')->name('tenant-order-cancel');
            });

            Route::controller(TenantProductController::class)->group(function () {
                Route::get('{tenant:code}/product', 'index')->name('tenant-product-index');
                Route::get('{tenant:code}/product/create', 'create')->name('tenant-product-create');
                Route::get('{tenant:code}/product/{product}/edit', 'edit')->name('tenant-product-edit');
                Route::put('{tenant}/product/{product}', 'update')->name('tenant-product-update');
                Route::put('{tenant}/product/{product}/status', 'updateStatus')->name('tenant-product-update-status');
                Route::post('{tenant}/product', 'store')->name('tenant-product-store');
                Route::post('{tenant}/product/destroy', 'destroy')->name('tenant-product-destroy');
            });

            Route::controller(TenantTenantSErvicePaymentController::class)->group(function () {
                Route::get('{tenant:code}/service-payment', 'index')->name('tenant-service-payment-index');
            });

            Route::controller(TenantDeskController::class)->group(function () {
                Route::get('{tenant:code}/desk', 'index')->name('tenant-desk-index');
                Route::post('{tenant}/desk', 'store')->name('tenant-desk-store');
                Route::put('{tenant}/desk/update', 'update')->name('tenant-desk-update');
                Route::delete('{tenant}/desk/destroy', 'destroy')->name('tenant-desk-destroy');
            });            
            Route::controller(TenantWaiterController::class)->group(function() {
                Route::get('{tenant:code}/waiter', 'index')->name('tenant-waiter-index');
                Route::post('{tenant}/waiter', 'store')->name('tenant-waiter-store');

            });
        });
    });
});

Route::prefix('waiter')->middleware('can:waiter-access')->group(function () {
    Route::controller(WaiterWaiterController::class)->group(function () {
        Route::get('{tenant:code}/', 'index')->name('waiter-index');
        Route::get('{tenant:code}/detail-order/{order:code}', 'show')->name('waiter-show')->withoutScopedBindings();
        Route::put('{tenant}/detail-order/{order}/next-status', 'nextStatus')->name('waiter-detail-order-next-status');
        Route::get('{tenant:code}/profile', 'profile')->name('waiter-profile');
        Route::put('{tenant}/profile/update', 'update')->name('waiter-profile-update');
        Route::post('{tenant}/profile/update-photo', 'updatePhoto')->name('waiter-profile-update-photo');
        Route::put('{tenant}/profile/change-password', 'changePassword')->name('waiter-profile-change-password');
    });
});

Route::prefix('/customer/{tenant}/{desk}')->group(function () {
    Route::prefix('cart')->group(function () {
        Route::controller(CartController::class)->group(function () {
            Route::get('/', 'index')->name('customer-cart');
        });
    });
    Route::controller(CustomerController::class)->group(function () {
        Route::get('/', 'index')->name('customer-index');
        Route::get('menu', 'menu')->name('customer-menu');
        Route::get('verify/{order}', 'verify')->name('customer-verify');
        Route::get('verified/{order}', 'verified')->name('customer-verified');
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
