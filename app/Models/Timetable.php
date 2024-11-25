<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    /** @use HasFactory<\Database\Factories\TimetableFactory> */
    use HasFactory;
    protected $fillable = ['subject_id', 'teacher_id', 'day', 'time', 'room_id'];

    // Timetable belongs to Subject
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    // Timetable belongs to Teacher
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    // Timetable belongs to Room
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
