<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Subject::create([
            'subject_name' => 'Mathematics',
            'subject_code' => '101',
            'subject_teacher' => 'Dr. John Doe',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
