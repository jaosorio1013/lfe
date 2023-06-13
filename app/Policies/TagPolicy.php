<?php

namespace App\Policies;

use App\Models\MoneyTag;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TagPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, MoneyTag $tag): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, MoneyTag $tag): bool
    {
    }

    public function delete(User $user, MoneyTag $tag): bool
    {
    }

    public function restore(User $user, MoneyTag $tag): bool
    {
    }

    public function forceDelete(User $user, MoneyTag $tag): bool
    {
    }
}
