<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory;
  protected $fillable=['firstName','lastName','email','phone'];
      // Teacher has many Timetables
      public function timetables()
      {
          return $this->hasMany(Timetable::class);
      }
}
