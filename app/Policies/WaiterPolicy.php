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
    public function viewAny(Tenant $tenant, Waiter $waiter): Response
    {
        return $waiter->tenant_id === $tenant->id
            ? Response::allow()
            : Response::deny();
        ;
    }

    public function accessTenantWaiter(User $user, Tenant $tenant): Response
    {
        return $user->waiter->id === $tenant->user_id
            ? Response::allow('success', 201)
            : Response::deny();
        ;
    }
}
