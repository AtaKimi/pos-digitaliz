<?php

use App\Models\Desk;
use App\Models\Order;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('rholand', function () {
    $orders = Order::all();
    $tenant = $orders->desk->tenantd;
    $desks = Desk::where('tenant_id', $tenant->id)->pluck('id');
        $orders = Order::whereIn('desk_id', $desks)->get();
    $this->comment($orders[]);
})->purpose('Display an inspiring quote');
