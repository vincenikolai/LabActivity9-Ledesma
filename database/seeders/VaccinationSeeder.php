<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vaccination;

class VaccinationSeeder extends Seeder
{
    public function run(): void
    {
        $rows = [
            ['patient_name' => 'Baby Juan Dela Cruz', 'purok' => 'Purok 1', 'vaccine' => 'BCG', 'dose' => '1st dose', 'scheduled_at' => '2026-11-03', 'status' => 'Scheduled'],
            ['patient_name' => 'Lola Pacing Reyes', 'purok' => 'Purok 2', 'vaccine' => 'Anti-Flu', 'dose' => 'Annual', 'scheduled_at' => '2026-10-20', 'status' => 'Overdue'],
            ['patient_name' => 'Pedro Penduko', 'purok' => 'Purok 3', 'vaccine' => 'Pentavalent', 'dose' => '2nd dose', 'scheduled_at' => '2026-11-10', 'status' => 'Scheduled'],
            ['patient_name' => 'Maria Clara', 'purok' => 'Purok 4', 'vaccine' => 'OPV', 'dose' => '1st dose', 'scheduled_at' => '2026-09-15', 'status' => 'Done'],
            ['patient_name' => 'Jose Rizal', 'purok' => 'Purok 5', 'vaccine' => 'MMR', 'dose' => 'Booster', 'scheduled_at' => '2026-09-14', 'status' => 'Done'],
            ['patient_name' => 'Andres Bonifacio', 'purok' => 'Purok 6', 'vaccine' => 'Hepatitis B', 'dose' => '1st dose', 'scheduled_at' => '2026-12-01', 'status' => 'Scheduled'],
        ];

        foreach ($rows as $row) {
            Vaccination::create($row);
        }
    }
}