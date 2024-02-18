<?php

use App\Models\LocationCountry;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('location_states', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(LocationCountry::class);
            $table->string('name')->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('states');
    }
};
