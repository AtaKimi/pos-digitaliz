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
    public function viewAny(User $user, Product $product): Response
    {
        return $user->id === $product->category->tenant->user->id
            ? Response::allow('success', 201)
            : Response::deny();;
    }
}
