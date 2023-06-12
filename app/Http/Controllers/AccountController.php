<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Http\Resources\AccountResource;
use App\Models\Account;

class AccountController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Account::class);

        return AccountResource::collection(Account::all());
    }

    public function store(AccountRequest $request)
    {
        $this->authorize('create', Account::class);

        return new AccountResource(Account::create($request->validated()));
    }

    public function show(Account $account)
    {
        $this->authorize('view', $account);

        return new AccountResource($account);
    }

    public function update(AccountRequest $request, Account $account)
    {
        $this->authorize('update', $account);

        $account->update($request->validated());

        return new AccountResource($account);
    }

    public function destroy(Account $account)
    {
        $this->authorize('delete', $account);

        $account->delete();

        return response()->json();
    }
}
