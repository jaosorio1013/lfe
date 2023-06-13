<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Http\Resources\TransactionResource;
use App\Models\MoneyTransaction;

class TransactionController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', MoneyTransaction::class);

        return TransactionResource::collection(MoneyTransaction::all());
    }

    public function store(TransactionRequest $request)
    {
        $this->authorize('create', MoneyTransaction::class);

        return new TransactionResource(MoneyTransaction::create($request->validated()));
    }

    public function show(MoneyTransaction $transaction)
    {
        $this->authorize('view', $transaction);

        return new TransactionResource($transaction);
    }

    public function update(TransactionRequest $request, MoneyTransaction $transaction)
    {
        $this->authorize('update', $transaction);

        $transaction->update($request->validated());

        return new TransactionResource($transaction);
    }

    public function destroy(MoneyTransaction $transaction)
    {
        $this->authorize('delete', $transaction);

        $transaction->delete();

        return response()->json();
    }
}
