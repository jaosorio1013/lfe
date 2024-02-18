<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryRequest;
use App\Http\Resources\CountryResource;
use App\Models\LocationCountry;

class CountryController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', LocationCountry::class);

        return CountryResource::collection(LocationCountry::all());
    }

    public function store(CountryRequest $request)
    {
        $this->authorize('create', LocationCountry::class);

        return new CountryResource(LocationCountry::create($request->validated()));
    }

    public function show(LocationCountry $country)
    {
        $this->authorize('view', $country);

        return new CountryResource($country);
    }

    public function update(CountryRequest $request, LocationCountry $country)
    {
        $this->authorize('update', $country);

        $country->update($request->validated());

        return new CountryResource($country);
    }

    public function destroy(LocationCountry $country)
    {
        $this->authorize('delete', $country);

        $country->delete();

        return response()->json();
    }
}
