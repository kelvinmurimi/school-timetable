<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Timetable;
use App\Models\Room;
use App\Models\Subject;
use App\Models\Teacher;

class TimetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Timetable::create([
            'subject_id'=>Subject::all()->random(),
            'teacher_id'=>Teacher::all()->random(),
            'day'=>'Monday',
            'time'=>'8:00Am-10:00Am',
            'room_id'=>Room::all()->random(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Timetable::create([
            'subject_id'=>Subject::all()->random(),
            'teacher_id'=>Teacher::all()->random(),
            'day'=>'Wednesday',
            'time'=>'10:00Am-12:00Am',
            'room_id'=>Room::all()->random(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Timetable::create([
            'subject_id'=>Subject::all()->random(),
            'teacher_id'=>Teacher::all()->random(),
            'day'=>'Tuesday',
            'time'=>'8:00Am-10:00Am',
            'room_id'=>Room::all()->random(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Timetable::create([
            'subject_id'=>Subject::all()->random(),
            'teacher_id'=>Teacher::all()->random(),
            'day'=>'Monday',
            'time'=>'12:00Am-1:00Pm',
            'room_id'=>Room::all()->random(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Timetable::create([
            'subject_id'=>Subject::all()->random(),
            'teacher_id'=>Teacher::all()->random(),
            'day'=>'Friday',
            'time'=>'8:00Am-10:00Am',
            'room_id'=>Room::all()->random(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Timetable::create([
            'subject_id'=>Subject::all()->random(),
            'teacher_id'=>Teacher::all()->random(),
            'day'=>'Thursday',
            'time'=>'8:00Am-10:00Am',
            'room_id'=>Room::all()->random(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Timetable::create([
            'subject_id'=>Subject::all()->random(),
            'teacher_id'=>Teacher::all()->random(),
            'day'=>'Tuesday',
            'time'=>'8:00Am-10:00Am',
            'room_id'=>Room::all()->random(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Timetable::create([
            'subject_id'=>Subject::all()->random(),
            'teacher_id'=>Teacher::all()->random(),
            'day'=>'Monday',
            'time'=>'3:00Pm-4:00Pm',
            'room_id'=>Room::all()->random(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Timetable::create([
            'subject_id'=>Subject::all()->random(),
            'teacher_id'=>Teacher::all()->random(),
            'day'=>'Wednesday',
            'time'=>'10:00Am-11:00Am',
            'room_id'=>Room::all()->random(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Timetable::create([
            'subject_id'=>Subject::all()->random(),
            'teacher_id'=>Teacher::all()->random(),
            'day'=>'Teusday',
            'time'=>'12:00Am-2:00Pm',
            'room_id'=>Room::all()->random(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Timetable::create([
            'subject_id'=>Subject::all()->random(),
            'teacher_id'=>Teacher::all()->random(),
            'day'=>'Monday',
            'time'=>'10:00Am-12:00Am',
            'room_id'=>Room::all()->random(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
