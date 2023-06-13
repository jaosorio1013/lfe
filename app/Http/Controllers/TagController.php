<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use App\Http\Resources\TagResource;
use App\Models\MoneyTag;

class TagController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', MoneyTag::class);

        return TagResource::collection(MoneyTag::all());
    }

    public function store(TagRequest $request)
    {
        $this->authorize('create', MoneyTag::class);

        return new TagResource(MoneyTag::create($request->validated()));
    }

    public function show(MoneyTag $tag)
    {
        $this->authorize('view', $tag);

        return new TagResource($tag);
    }

    public function update(TagRequest $request, MoneyTag $tag)
    {
        $this->authorize('update', $tag);

        $tag->update($request->validated());

        return new TagResource($tag);
    }

    public function destroy(MoneyTag $tag)
    {
        $this->authorize('delete', $tag);

        $tag->delete();

        return response()->json();
    }
}
