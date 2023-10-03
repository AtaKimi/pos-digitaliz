<?php

namespace App\Policies;

use App\Models\Desk;
use App\Models\User;
use App\Models\Tenant;
use Illuminate\Auth\Access\Response;

class DeskPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user, Tenant $tenant): Response
    {
        return $user->id === $tenant->user_id
            ? Response::allow('success', 201)
            : Response::deny();;
    }
}
