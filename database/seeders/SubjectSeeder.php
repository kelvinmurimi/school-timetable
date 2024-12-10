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
            'subject_name'=>'English',
            'subject_code'=>'101',
            'subject_teacher'=>'teacher 1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Subject::create([
            'subject_name'=>'Maths',
            'subject_code'=>'102',
            'subject_teacher'=>'teacher 2',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Subject::create([
            'subject_name'=>'Kiswahili',
            'subject_code'=>'103',
            'subject_teacher'=>'teacher 3',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Subject::create([
            'subject_name'=>'Science',
            'subject_code'=>'104',
            'subject_teacher'=>'teacher 4',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Subject::create([
            'subject_name'=>'CRE',
            'subject_code'=>'105',
            'subject_teacher'=>'teacher 6',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Subject::create([
            'subject_name'=>'Social Studies',
            'subject_code'=>'106',
            'subject_teacher'=>'teacher 5',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        Subject::create([
            'subject_name' => 'Mathematics',
            'subject_code' => '101',
            'subject_teacher' => 'Dr. John Doe',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
    }
}
