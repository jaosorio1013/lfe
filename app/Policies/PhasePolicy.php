<?php

namespace App\Policies;

use App\Models\Phase;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PhasePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Phase $phase): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Phase $phase): bool
    {
    }

    public function delete(User $user, Phase $phase): bool
    {
    }

    public function restore(User $user, Phase $phase): bool
    {
    }

    public function forceDelete(User $user, Phase $phase): bool
    {
    }
}
