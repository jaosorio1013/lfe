<?php

use App\Models\LocationCity;
use App\Models\LocationCountry;
use App\Models\Person;
use App\Models\LocationState;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->integer('identification_type')->default(Person::IDENTIFICATION_TYPE_CEDULA);
            $table->string('identification_number')->unique();
            $table->string('name')->index();
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('alias')->nullable()->index();
            $table->foreignIdFor(LocationCountry::class)->nullable();
            $table->foreignIdFor(LocationState::class)->nullable();
            $table->foreignIdFor(LocationCity::class)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
