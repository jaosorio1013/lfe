<?php

namespace App\Http\Controllers;

use App\Http\Requests\StateRequest;
use App\Http\Resources\StateResource;
use App\Models\State;

class StateController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', State::class);

        return StateResource::collection(State::all());
    }

    public function store(StateRequest $request)
    {
        $this->authorize('create', State::class);

        return new StateResource(State::create($request->validated()));
    }

    public function show(State $state)
    {
        $this->authorize('view', $state);

        return new StateResource($state);
    }

    public function update(StateRequest $request, State $state)
    {
        $this->authorize('update', $state);

        $state->update($request->validated());

        return new StateResource($state);
    }

    public function destroy(State $state)
    {
        $this->authorize('delete', $state);

        $state->delete();

        return response()->json();
    }
}
