<?php

namespace App\Policies;

use App\Models\MoneyTransaction;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TransactionPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, MoneyTransaction $transaction): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, MoneyTransaction $transaction): bool
    {
    }

    public function delete(User $user, MoneyTransaction $transaction): bool
    {
    }

    public function restore(User $user, MoneyTransaction $transaction): bool
    {
    }

    public function forceDelete(User $user, MoneyTransaction $transaction): bool
    {
    }
}
