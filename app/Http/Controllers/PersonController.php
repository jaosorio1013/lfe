<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Http\Resources\PersonResource;
use App\Models\Person;

class PersonController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Person::class);

        return PersonResource::collection(Person::all());
    }

    public function store(PersonRequest $request)
    {
        $this->authorize('create', Person::class);

        return new PersonResource(Person::create($request->validated()));
    }

    public function show(Person $person)
    {
        $this->authorize('view', $person);

        return new PersonResource($person);
    }

    public function update(PersonRequest $request, Person $person)
    {
        $this->authorize('update', $person);

        $person->update($request->validated());

        return new PersonResource($person);
    }

    public function destroy(Person $person)
    {
        $this->authorize('delete', $person);

        $person->delete();

        return response()->json();
    }
}
