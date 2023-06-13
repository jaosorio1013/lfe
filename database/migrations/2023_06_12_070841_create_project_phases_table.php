<?php

use App\Models\Person;
use App\Models\Phase;
use App\Models\Project;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('project_phases', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->foreignIdFor(Phase::class);
            $table->foreignIdFor(Project::class);
            $table->foreignIdFor(Person::class, 'client_id')->nullable();
            $table->unsignedInteger('term')->nullable(); // in working days
            $table->dateTime('start_date')->nullable();
            $table->dateTime('finish_date')->nullable();
            $table->dateTime('finished_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_phases');
    }
};
