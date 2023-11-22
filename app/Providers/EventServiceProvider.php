<?php

namespace App\Providers;

use App\Models\Desk;
use App\Models\Order;
use App\Models\Tenant;
use App\Models\Waiter;
use App\Models\OrderDetail;
use App\Observers\DeskObserver;
use App\Observers\OrderObserver;
use App\Observers\TenantObserver;
use App\Observers\WaiterObserver;
use App\Observers\OrderDetailObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        Order::observe(OrderObserver::class);
        OrderDetail::observe(OrderDetailObserver::class);
        Desk::observe(DeskObserver::class);
        Tenant::observe(TenantObserver::class);
        Waiter::observe(WaiterObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
