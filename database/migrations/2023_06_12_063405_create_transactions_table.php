<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('type')->default();
            $table->unsignedDecimal('amount');
            $table->string('title');
            $table->date('date')->index();
            $table->foreignIdFor('category_id');
            $table->foreignIdFor('account_id');
            $table->foreignIdFor('payee_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
