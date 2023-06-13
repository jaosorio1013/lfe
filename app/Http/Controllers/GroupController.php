<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupRequest;
use App\Http\Resources\GroupResource;
use App\Models\MoneyGroup;

class GroupController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', MoneyGroup::class);

        return GroupResource::collection(MoneyGroup::all());
    }

    public function store(GroupRequest $request)
    {
        $this->authorize('create', MoneyGroup::class);

        return new GroupResource(MoneyGroup::create($request->validated()));
    }

    public function show(MoneyGroup $group)
    {
        $this->authorize('view', $group);

        return new GroupResource($group);
    }

    public function update(GroupRequest $request, MoneyGroup $group)
    {
        $this->authorize('update', $group);

        $group->update($request->validated());

        return new GroupResource($group);
    }

    public function destroy(MoneyGroup $group)
    {
        $this->authorize('delete', $group);

        $group->delete();

        return response()->json();
    }
}
