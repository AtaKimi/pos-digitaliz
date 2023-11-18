<?php

namespace App\Observers;

use App\Models\Waiter;

class WaiterObserver
{
    public function created(Waiter $waiter)
    {
        $code = $waiter->tenant->code . sprintf("%06d", $waiter->id);
        $waiter->update(['code' => $code]);
    }
}
