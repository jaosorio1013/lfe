<?php

namespace App\Policies;

use App\Models\MoneyGroup;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GroupPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, MoneyGroup $group): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, MoneyGroup $group): bool
    {
    }

    public function delete(User $user, MoneyGroup $group): bool
    {
    }

    public function restore(User $user, MoneyGroup $group): bool
    {
    }

    public function forceDelete(User $user, MoneyGroup $group): bool
    {
    }
}
