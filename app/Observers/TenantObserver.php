<?php

namespace App\Observers;

use App\Models\Tenant;
use App\Models\Service;
use Illuminate\Support\Str;

class TenantObserver
{
    /**
     * Handle the Tenant "creating" event.
     */
    public function creating(Tenant $tenant): void
    {
        $code = Str::random(5);
        while (Tenant::where('code', $code)->exists()) {
            $code = Str::random(5);
        }
        $tenant->code  = $code;
    }

    public function created(Tenant $tenant): void
    {
        $tenant->service()->save(Service::create(['price' => 1000]));
    }
}
