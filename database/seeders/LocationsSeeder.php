<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    public function run(): void
    {
        $this->runSqlFile('location_countries');
        $this->runSqlFile('location_states');
        $this->runSqlFile('location_cities');
    }

    private function runSqlFile(string $sqlFileName): void
    {
        $file_path = __DIR__ . '/../sql/' . $sqlFileName . '.sql';

        DB::unprepared(
            file_get_contents($file_path)
        );

        $this->command->info($sqlFileName . ' file seeded!');
    }
}
