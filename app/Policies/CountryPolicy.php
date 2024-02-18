<?php

namespace App\Policies;

use App\Models\LocationCountry;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CountryPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, LocationCountry $country): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, LocationCountry $country): bool
    {
    }

    public function delete(User $user, LocationCountry $country): bool
    {
    }

    public function restore(User $user, LocationCountry $country): bool
    {
    }

    public function forceDelete(User $user, LocationCountry $country): bool
    {
    }
}
