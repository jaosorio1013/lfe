<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\MoneyAccount;
use App\Models\MoneyCategory;
use App\Models\LocationCity;
use App\Models\LocationCountry;
use App\Models\MoneyGroup;
use App\Models\Holiday;
use App\Models\MoneySchedule;
use App\Models\MoneyPayee;
use App\Models\Note;
use App\Models\NoteType;
use App\Models\Person;
use App\Models\Phase;
use App\Models\Project;
use App\Models\ProjectPhase;
use App\Models\ProjectSpace;
use App\Models\LocationState;
use App\Models\MoneyTag;
use App\Models\MoneyTransaction;
use App\Policies\AccountPolicy;
use App\Policies\CategoryPolicy;
use App\Policies\CityPolicy;
use App\Policies\CountryPolicy;
use App\Policies\GroupPolicy;
use App\Policies\HolidayPolicy;
use App\Policies\MoneySchedulePolicy;
use App\Policies\NotePolicy;
use App\Policies\NoteTypePolicy;
use App\Policies\PayeePolicy;
use App\Policies\PersonPolicy;
use App\Policies\PhasePolicy;
use App\Policies\ProjectPhasePolicy;
use App\Policies\ProjectPolicy;
use App\Policies\ProjectSpacePolicy;
use App\Policies\StatePolicy;
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
        MoneyTag::class => TagPolicy::class,
        MoneyGroup::class => GroupPolicy::class,
        MoneyAccount::class => AccountPolicy::class,
        MoneyPayee::class => PayeePolicy::class,
        MoneyTransaction::class => TransactionPolicy::class,
        Person::class => PersonPolicy::class,
        Project::class => ProjectPolicy::class,
        ProjectSpace::class => ProjectSpacePolicy::class,
        ProjectPhase::class => ProjectPhasePolicy::class,
        Phase::class => PhasePolicy::class,
        Holiday::class => HolidayPolicy::class,
        LocationCountry::class => CountryPolicy::class,
        LocationState::class => StatePolicy::class,
        LocationCity::class => CityPolicy::class,
        MoneyCategory::class => CategoryPolicy::class,
        MoneySchedule::class => MoneySchedulePolicy::class,
        NoteType::class => NoteTypePolicy::class,
        Note::class => NotePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
