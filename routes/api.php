<?php

use App\Http\Controllers\Api\Tenant\ProductController;
use App\Http\Controllers\Api\Tenant\WaiterController;
use App\Http\Resources\Tenant\ProductResource;
use App\Models\Tenant;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('product')->group(function () {
        Route::controller(ProductController::class)->group(function (){
            Route::get('/', 'index');
            Route::get('/{product}', 'show');
            Route::post('/{product}/status', 'editStatus');
        });
    });
    Route::prefix('waiter')->group(function() {
        Route::controller(WaiterController::class)->group(function () {
            Route::put('/update/{waiter}', 'update');
        });
    });
});

Route::get('random', function () {
    return null;
});


