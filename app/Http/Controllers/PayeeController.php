<?php

namespace App\Http\Controllers;

use App\Http\Requests\PayeeRequest;
use App\Http\Resources\PayeeResource;
use App\Models\MoneyPayee;

class PayeeController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', MoneyPayee::class);

        return PayeeResource::collection(MoneyPayee::all());
    }

    public function store(PayeeRequest $request)
    {
        $this->authorize('create', MoneyPayee::class);

        return new PayeeResource(MoneyPayee::create($request->validated()));
    }

    public function show(MoneyPayee $payee)
    {
        $this->authorize('view', $payee);

        return new PayeeResource($payee);
    }

    public function update(PayeeRequest $request, MoneyPayee $payee)
    {
        $this->authorize('update', $payee);

        $payee->update($request->validated());

        return new PayeeResource($payee);
    }

    public function destroy(MoneyPayee $payee)
    {
        $this->authorize('delete', $payee);

        $payee->delete();

        return response()->json();
    }
}
