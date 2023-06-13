<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\MoneyCategory;

class CategoryController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', MoneyCategory::class);

        return CategoryResource::collection(MoneyCategory::all());
    }

    public function store(CategoryRequest $request)
    {
        $this->authorize('create', MoneyCategory::class);

        return new CategoryResource(MoneyCategory::create($request->validated()));
    }

    public function show(MoneyCategory $category)
    {
        $this->authorize('view', $category);

        return new CategoryResource($category);
    }

    public function update(CategoryRequest $request, MoneyCategory $category)
    {
        $this->authorize('update', $category);

        $category->update($request->validated());

        return new CategoryResource($category);
    }

    public function destroy(MoneyCategory $category)
    {
        $this->authorize('delete', $category);

        $category->delete();

        return response()->json();
    }
}
