<?php

namespace App\Http\Controllers;

use App\Http\Requests\PayeeRequest;
use App\Http\Resources\PayeeResource;
use App\Models\Payee;

class PayeeController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Payee::class);

        return PayeeResource::collection(Payee::all());
    }

    public function store(PayeeRequest $request)
    {
        $this->authorize('create', Payee::class);

        return new PayeeResource(Payee::create($request->validated()));
    }

    public function show(Payee $payee)
    {
        $this->authorize('view', $payee);

        return new PayeeResource($payee);
    }

    public function update(PayeeRequest $request, Payee $payee)
    {
        $this->authorize('update', $payee);

        $payee->update($request->validated());

        return new PayeeResource($payee);
    }

    public function destroy(Payee $payee)
    {
        $this->authorize('delete', $payee);

        $payee->delete();

        return response()->json();
    }
}
