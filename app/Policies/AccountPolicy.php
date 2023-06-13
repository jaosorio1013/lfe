<?php

namespace App\Policies;

use App\Models\MoneyAccount;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AccountPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, MoneyAccount $account): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, MoneyAccount $account): bool
    {
    }

    public function delete(User $user, MoneyAccount $account): bool
    {
    }

    public function restore(User $user, MoneyAccount $account): bool
    {
    }

    public function forceDelete(User $user, MoneyAccount $account): bool
    {
    }
}
