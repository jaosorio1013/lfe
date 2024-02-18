<?php

namespace App\Policies;

use App\Models\LocationState;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StatePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, LocationState $state): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, LocationState $state): bool
    {
    }

    public function delete(User $user, LocationState $state): bool
    {
    }

    public function restore(User $user, LocationState $state): bool
    {
    }

    public function forceDelete(User $user, LocationState $state): bool
    {
    }
}
