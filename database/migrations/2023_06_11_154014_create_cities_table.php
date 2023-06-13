<?php

use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->foreignIdFor(State::class);
            $table->foreignIdFor(Country::class);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
