<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectPhaseRequest;
use App\Http\Resources\ProjectPhaseResource;
use App\Models\ProjectPhase;

class ProjectPhaseController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', ProjectPhase::class);

        return ProjectPhaseResource::collection(ProjectPhase::all());
    }

    public function store(ProjectPhaseRequest $request)
    {
        $this->authorize('create', ProjectPhase::class);

        return new ProjectPhaseResource(ProjectPhase::create($request->validated()));
    }

    public function show(ProjectPhase $projectPhase)
    {
        $this->authorize('view', $projectPhase);

        return new ProjectPhaseResource($projectPhase);
    }

    public function update(ProjectPhaseRequest $request, ProjectPhase $projectPhase)
    {
        $this->authorize('update', $projectPhase);

        $projectPhase->update($request->validated());

        return new ProjectPhaseResource($projectPhase);
    }

    public function destroy(ProjectPhase $projectPhase)
    {
        $this->authorize('delete', $projectPhase);

        $projectPhase->delete();

        return response()->json();
    }
}
