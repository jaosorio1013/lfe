<?php

namespace Database\Seeders;

use App\Models\LocationCity;
use App\Models\LocationCountry;
use App\Models\Person;
use App\Models\LocationState;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    public function run(): void
    {
        $this->createPeople(
            $this->getPeople()
        );
    }

    private function getPeople(): array
    {
        return [
            ['name' => 'NATALY GONZALEZ BLANDON', 'identification_number' => '1036423464', 'address' => 'Cr 43 A Nº 32-21', 'city' => 'Envigado', 'departamento' => 'Antioquia', 'phone' => '3216271334', 'email' => 'natalygon545@hotmail.com'],
            ['name' => 'JULIETH PAOLA BELTRAN RUIZ', 'identification_number' => '1152200681', 'address' => 'Cr 81 Nº 42-125', 'city' => 'Medellin', 'departamento' => 'Antioquia', 'phone' => '3122972023', 'email' => 'paholita-3004@hotmail.com'],
            ['name' => 'OPTIMOS CONSTRUCTORES S.A.S', 'identification_number' => '901579815', 'address' => 'Cr 40 N° 68-14', 'city' => 'Medellin', 'departamento' => 'Antioquia', 'phone' => '3182171011', 'email' => 'constructoresumbral@gmail.com'],
            ['name' => 'MARIO ALEXIS TOBON JURADO', 'identification_number' => '1037590120', 'address' => 'Cr 55 Nº 110 sur -162 int. 3308', 'city' => 'Caldas', 'departamento' => 'Antioquia', 'phone' => '3053100964', 'email' => 'marioalexistj@gmail.com'],
            ['name' => 'ROSARIO DEL PILAR TABARES RAMIREZ', 'identification_number' => '20904151', 'address' => 'Cl 48 Nº 27-77', 'city' => 'Bucaramanga', 'departamento' => 'Santander', 'phone' => '3102534453', 'email' => 'reverzo@outlook.com '],
            ['name' => 'MARIANA GALVIS HERRERA', 'identification_number' => '1054921091', 'address' => 'Cr 51 Nº 111 B sur-29', 'city' => 'Caldas', 'departamento' => 'Antioquia', 'phone' => '3013330087', 'email' => 'marygh1991@gmail.com'],
            ['name' => 'ALUMVIX S.A.S', 'identification_number' => '901474890', 'address' => 'Cr 52 N° 46-52', 'city' => 'Itagüí', 'departamento' => 'Antioquia', 'phone' => '3043579052', 'email' => 'alumvix@gmail.com'],

            ['name' => 'ALEXIS VALDERRAMA RESTREPO', 'identification_number' => '1026138170', 'address' => 'VEREDA LA MIEL', 'city' => 'Caldas', 'departamento' => 'Antioquia', 'phone' => '3216089142', 'email' => 'mobiliariodecomadero@gmail.com'],
            ['name' => 'ESPEJITOS-ESPEJITOS SAS', 'identification_type' => Person::IDENTIFICATION_TYPE_NIT, 'identification_number' => '901530403-7', 'address' => 'Cl 48 FF sur 42C-113', 'city' => 'Envigado', 'departamento' => 'Antioquia', 'phone' => '3004043610', 'email' => 'arq.melissaescobar@gmail.com'],
            ['name' => 'ALEJANDRO CORREA MONTOYA', 'identification_number' => '1040737451', 'address' => 'Carrera 52 #99 Sur 96. apto 710, t3 Panorama', 'city' => 'La estrella', 'departamento' => 'Antioquia', 'phone' => '3044054204', 'email' => 'yacorr@gmail.com'],
        ];
    }

    private function createPeople(array $people): void
    {
        $colombiaId = LocationCountry::where('name', 'Colombia')->value('id');
        $antioquiaId = LocationState::where('location_country_id', $colombiaId)->where('name', 'Antioquia')->value('id');
        $santanderId = LocationState::where('location_country_id', $colombiaId)->where('name', 'Santander')->value('id');

        foreach ($people as $person) {
            $person['location_country_id'] = $colombiaId;
            $person['location_state_id'] = $person['departamento'] === 'Antioquia' ? $antioquiaId : $santanderId;
            $person['location_city_id'] = LocationCity::where('location_state_id', $person['location_state_id'])->where('name', $person['city'])->value('id');

            unset($person['departamento'], $person['city']);

            Person::firstOrCreate($person);
        }
    }
}
