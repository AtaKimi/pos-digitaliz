<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Category;
use App\Models\Desk;
use App\Models\Order;
use App\Models\Product;
use App\Models\Tenant;
use App\Models\TenantServicePayment;
use App\Models\Waiter;
use App\Policies\CategoryPolicy;
use App\Policies\DeskPolicy;
use App\Policies\OrderPolicy;
use App\Policies\ProductPolicy;
use App\Policies\TenantPolicy;
use App\Policies\TenantServicePaymentPolicy;
use App\Policies\WaiterPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Tenant::class => TenantPolicy::class,
        Category::class => CategoryPolicy::class,
        Order::class => OrderPolicy::class,
        Product::class => ProductPolicy::class,
        TenantServicePayment::class => TenantServicePaymentPolicy::class,
        Desk::class => DeskPolicy::class,
        Waiter::class => WaiterPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
