<?php

use App\Models\MoneyAccount;
use App\Models\MoneyCategory;
use App\Models\MoneyPayee;
use App\Models\Project;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('money_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('type');
            $table->unsignedDecimal('amount');
            $table->string('title');
            $table->date('date')->index();
            $table->foreignIdFor(MoneyCategory::class);
            $table->foreignIdFor(MoneyAccount::class);
            $table->foreignIdFor(MoneyPayee::class)->nullable();
            $table->foreignIdFor(Project::class)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('money_transactions');
    }
};
