<?php

use App\Models\LocationCountry;
use App\Models\LocationState;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('location_cities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->foreignIdFor(LocationState::class);
            $table->foreignIdFor(LocationCountry::class);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
