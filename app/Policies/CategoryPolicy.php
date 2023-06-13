<?php

namespace App\Policies;

use App\Models\MoneyCategory;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, MoneyCategory $category): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, MoneyCategory $category): bool
    {
    }

    public function delete(User $user, MoneyCategory $category): bool
    {
    }

    public function restore(User $user, MoneyCategory $category): bool
    {
    }

    public function forceDelete(User $user, MoneyCategory $category): bool
    {
    }
}
