<?php

namespace App\Http\Controllers;

use App\Http\Requests\MoneyScheduleRequest;
use App\Http\Resources\MoneyScheduleResource;
use App\Models\MoneySchedule;

class MoneyScheduleController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', MoneySchedule::class);

        return MoneyScheduleResource::collection(MoneySchedule::all());
    }

    public function store(MoneyScheduleRequest $request)
    {
        $this->authorize('create', MoneySchedule::class);

        return new MoneyScheduleResource(MoneySchedule::create($request->validated()));
    }

    public function show(MoneySchedule $moneySchedule)
    {
        $this->authorize('view', $moneySchedule);

        return new MoneyScheduleResource($moneySchedule);
    }

    public function update(MoneyScheduleRequest $request, MoneySchedule $moneySchedule)
    {
        $this->authorize('update', $moneySchedule);

        $moneySchedule->update($request->validated());

        return new MoneyScheduleResource($moneySchedule);
    }

    public function destroy(MoneySchedule $moneySchedule)
    {
        $this->authorize('delete', $moneySchedule);

        $moneySchedule->delete();

        return response()->json();
    }
}
