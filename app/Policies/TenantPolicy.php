<?php

namespace App\Policies;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TenantPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user, Tenant $tenant): Response
    {
        return $tenant->user_id === $user->id
            ? Response::allow('success', 201)
            : Response::deny();
        ;
    }

    public function accessTenantWaiter(User $user, Tenant $tenant): Response
    {
        return $user->waiter->tenant_id === $tenant->id
            ? Response::allow('success', 201)
            : Response::deny();
        ;
    }
}
