<?php

use App\Models\MoneyAccount;
use App\Models\MoneyCategory;
use App\Models\MoneyPayee;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('money_schedules', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->float('amount');
            $table->string('title');
            $table->date('date')->index();
            $table->foreignIdFor(MoneyCategory::class);
            $table->foreignIdFor(MoneyAccount::class);
            $table->foreignIdFor(MoneyPayee::class)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('money_schedules');
    }
};
