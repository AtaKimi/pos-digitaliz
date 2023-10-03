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

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Waiter $waiter): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Waiter $waiter): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Waiter $waiter): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Waiter $waiter): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Waiter $waiter): bool
    {
        //
    }
}
