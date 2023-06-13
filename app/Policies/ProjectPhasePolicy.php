<?php

namespace App\Policies;

use App\Models\ProjectPhase;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPhasePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, ProjectPhase $projectPhase): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, ProjectPhase $projectPhase): bool
    {
    }

    public function delete(User $user, ProjectPhase $projectPhase): bool
    {
    }

    public function restore(User $user, ProjectPhase $projectPhase): bool
    {
    }

    public function forceDelete(User $user, ProjectPhase $projectPhase): bool
    {
    }
}
