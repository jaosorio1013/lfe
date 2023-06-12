<?php

namespace App\Policies;

use App\Models\Account;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AccountPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Account $account): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Account $account): bool
    {
    }

    public function delete(User $user, Account $account): bool
    {
    }

    public function restore(User $user, Account $account): bool
    {
    }

    public function forceDelete(User $user, Account $account): bool
    {
    }
}
