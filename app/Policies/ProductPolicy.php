<?php

namespace App\Policies;

use App\Models\User;

class ProductPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function viewany()
    {
    }

    public function delete(User $user)
    {
        return $user->isAdmin();
    }
}
