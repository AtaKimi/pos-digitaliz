<?php

namespace App\Observers;

use App\Models\Desk;

class DeskObserver
{
    /**
     * Handle the Desk "created" event.
     */
    public function created(Desk $desk): void
    {
        $tenant = $desk->tenant;
        $desk->update(['url' => strval(route('customer-menu', [$tenant->id, $desk->id]))]);
    }
}
