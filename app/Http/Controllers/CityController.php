<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Http\Resources\CityResource;
use App\Models\LocationCity;

class CityController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', LocationCity::class);

        return CityResource::collection(LocationCity::all());
    }

    public function store(CityRequest $request)
    {
        $this->authorize('create', LocationCity::class);

        return new CityResource(LocationCity::create($request->validated()));
    }

    public function show(LocationCity $city)
    {
        $this->authorize('view', $city);

        return new CityResource($city);
    }

    public function update(CityRequest $request, LocationCity $city)
    {
        $this->authorize('update', $city);

        $city->update($request->validated());

        return new CityResource($city);
    }

    public function destroy(LocationCity $city)
    {
        $this->authorize('delete', $city);

        $city->delete();

        return response()->json();
    }
}
