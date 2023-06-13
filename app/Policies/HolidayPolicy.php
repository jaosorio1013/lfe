<?php

namespace App\Policies;

use App\Models\Holiday;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HolidayPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Holiday $holiday): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Holiday $holiday): bool
    {
    }

    public function delete(User $user, Holiday $holiday): bool
    {
    }

    public function restore(User $user, Holiday $holiday): bool
    {
    }

    public function forceDelete(User $user, Holiday $holiday): bool
    {
    }
}
