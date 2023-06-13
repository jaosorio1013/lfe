<?php

namespace App\Policies;

use App\Models\MoneyPayee;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PayeePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, MoneyPayee $payee): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, MoneyPayee $payee): bool
    {
    }

    public function delete(User $user, MoneyPayee $payee): bool
    {
    }

    public function restore(User $user, MoneyPayee $payee): bool
    {
    }

    public function forceDelete(User $user, MoneyPayee $payee): bool
    {
    }
}
