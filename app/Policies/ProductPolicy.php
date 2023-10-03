<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Tenant;
use App\Models\Product;
use Illuminate\Auth\Access\Response;

class ProductPolicy
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
