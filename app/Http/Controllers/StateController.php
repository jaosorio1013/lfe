<?php

namespace App\Http\Controllers;

use App\Http\Requests\StateRequest;
use App\Http\Resources\StateResource;
use App\Models\LocationState;

class StateController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', LocationState::class);

        return StateResource::collection(LocationState::all());
    }

    public function store(StateRequest $request)
    {
        $this->authorize('create', LocationState::class);

        return new StateResource(LocationState::create($request->validated()));
    }

    public function show(LocationState $state)
    {
        $this->authorize('view', $state);

        return new StateResource($state);
    }

    public function update(StateRequest $request, LocationState $state)
    {
        $this->authorize('update', $state);

        $state->update($request->validated());

        return new StateResource($state);
    }

    public function destroy(LocationState $state)
    {
        $this->authorize('delete', $state);

        $state->delete();

        return response()->json();
    }
}
