<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhaseRequest;
use App\Http\Resources\PhaseResource;
use App\Models\Phase;

class PhaseController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Phase::class);

        return PhaseResource::collection(Phase::all());
    }

    public function store(PhaseRequest $request)
    {
        $this->authorize('create', Phase::class);

        return new PhaseResource(Phase::create($request->validated()));
    }

    public function show(Phase $phase)
    {
        $this->authorize('view', $phase);

        return new PhaseResource($phase);
    }

    public function update(PhaseRequest $request, Phase $phase)
    {
        $this->authorize('update', $phase);

        $phase->update($request->validated());

        return new PhaseResource($phase);
    }

    public function destroy(Phase $phase)
    {
        $this->authorize('delete', $phase);

        $phase->delete();

        return response()->json();
    }
}
