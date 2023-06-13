<?php

namespace App\Http\Controllers;

use App\Http\Requests\HolidayRequest;
use App\Http\Resources\HolidayResource;
use App\Models\Holiday;

class HolidayController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Holiday::class);

        return HolidayResource::collection(Holiday::all());
    }

    public function store(HolidayRequest $request)
    {
        $this->authorize('create', Holiday::class);

        return new HolidayResource(Holiday::create($request->validated()));
    }

    public function show(Holiday $holiday)
    {
        $this->authorize('view', $holiday);

        return new HolidayResource($holiday);
    }

    public function update(HolidayRequest $request, Holiday $holiday)
    {
        $this->authorize('update', $holiday);

        $holiday->update($request->validated());

        return new HolidayResource($holiday);
    }

    public function destroy(Holiday $holiday)
    {
        $this->authorize('delete', $holiday);

        $holiday->delete();

        return response()->json();
    }
}
