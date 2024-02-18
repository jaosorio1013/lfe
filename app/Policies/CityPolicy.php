<?php

namespace App\Policies;

use App\Models\LocationCity;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CityPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, LocationCity $city): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, LocationCity $city): bool
    {
    }

    public function delete(User $user, LocationCity $city): bool
    {
    }

    public function restore(User $user, LocationCity $city): bool
    {
    }

    public function forceDelete(User $user, LocationCity $city): bool
    {
    }
}
