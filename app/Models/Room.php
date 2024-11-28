<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /** @use HasFactory<\Database\Factories\RoomFactory> */
    use HasFactory;
    protected $table = 'rooms';
    protected $fillable = ['room_name',];

      // Class has many Timetables
      public function timetables()
      {
          return $this->hasMany(Timetable::class);
      }
}
