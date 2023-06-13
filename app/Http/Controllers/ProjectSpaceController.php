<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectSpaceRequest;
use App\Http\Resources\ProjectSpaceResource;
use App\Models\ProjectSpace;

class ProjectSpaceController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', ProjectSpace::class);

        return ProjectSpaceResource::collection(ProjectSpace::all());
    }

    public function store(ProjectSpaceRequest $request)
    {
        $this->authorize('create', ProjectSpace::class);

        return new ProjectSpaceResource(ProjectSpace::create($request->validated()));
    }

    public function show(ProjectSpace $projectSpace)
    {
        $this->authorize('view', $projectSpace);

        return new ProjectSpaceResource($projectSpace);
    }

    public function update(ProjectSpaceRequest $request, ProjectSpace $projectSpace)
    {
        $this->authorize('update', $projectSpace);

        $projectSpace->update($request->validated());

        return new ProjectSpaceResource($projectSpace);
    }

    public function destroy(ProjectSpace $projectSpace)
    {
        $this->authorize('delete', $projectSpace);

        $projectSpace->delete();

        return response()->json();
    }
}
