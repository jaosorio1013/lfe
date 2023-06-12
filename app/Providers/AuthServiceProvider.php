<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Account;
use App\Models\Group;
use App\Models\Payee;
use App\Models\Tag;
use App\Models\Transaction;
use App\Policies\AccountPolicy;
use App\Policies\GroupPolicy;
use App\Policies\PayeePolicy;
use App\Policies\TagPolicy;
use App\Policies\TransactionPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
        Tag::class => TagPolicy::class,
        Group::class => GroupPolicy::class,
        Account::class => AccountPolicy::class,
        Payee::class => PayeePolicy::class,
        Transaction::class => TransactionPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
