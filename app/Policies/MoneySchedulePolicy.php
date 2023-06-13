<?php

namespace App\Policies;

use App\Models\MoneySchedule;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MoneySchedulePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, MoneySchedule $moneySchedule): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, MoneySchedule $moneySchedule): bool
    {
    }

    public function delete(User $user, MoneySchedule $moneySchedule): bool
    {
    }

    public function restore(User $user, MoneySchedule $moneySchedule): bool
    {
    }

    public function forceDelete(User $user, MoneySchedule $moneySchedule): bool
    {
    }
}
