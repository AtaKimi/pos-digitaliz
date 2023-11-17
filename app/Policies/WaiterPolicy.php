<?php

namespace App\Policies;

use App\Models\Tenant;
use App\Models\User;
use App\Models\Waiter;
use Illuminate\Auth\Access\Response;

class WaiterPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user, Waiter $waiter): Response
    {
        return $waiter->tenant->user_id === $user->id && $waiter->is_active
            ? Response::allow()
            : Response::deny();
        ;
    }
}
