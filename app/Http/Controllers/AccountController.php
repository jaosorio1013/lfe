<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Http\Resources\AccountResource;
use App\Models\MoneyAccount;

class AccountController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', MoneyAccount::class);

        return AccountResource::collection(MoneyAccount::all());
    }

    public function store(AccountRequest $request)
    {
        $this->authorize('create', MoneyAccount::class);

        return new AccountResource(MoneyAccount::create($request->validated()));
    }

    public function show(MoneyAccount $account)
    {
        $this->authorize('view', $account);

        return new AccountResource($account);
    }

    public function update(AccountRequest $request, MoneyAccount $account)
    {
        $this->authorize('update', $account);

        $account->update($request->validated());

        return new AccountResource($account);
    }

    public function destroy(MoneyAccount $account)
    {
        $this->authorize('delete', $account);

        $account->delete();

        return response()->json();
    }
}
