<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CategoryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user, Category $category): Response
    {
        return $user->id === $category->tenant->user_id
            ? Response::allow('success', 201)
            : Response::deny();;
    }
}
