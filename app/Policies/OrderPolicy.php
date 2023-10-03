<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Order;
use App\Models\Tenant;
use Illuminate\Auth\Access\Response;

class OrderPolicy
{
   
    /**
     * Determine whether the user can permanently delete the model.
     */
    public function viewAny(User $user, Tenant $tenant): Response
    {
        return $user->id === $tenant->user_id
            ? Response::allow('success', 201)
            : Response::deny();;
    }
}
