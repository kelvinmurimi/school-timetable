<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;
class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        //
       Room::create([
        'room_name'=>'C-One-A',
        'created_at'=>now(),
        'updated_at'=>now(),

       ]);
       Room::create([
        'room_name'=>'C-two-B',
        'created_at'=>now(),
        'updated_at'=>now(),

       ]);
       Room::create([
        'room_name'=>'C-three-Y',
        'created_at'=>now(),
        'updated_at'=>now(),

       ]);
       Room::create([
        'room_name'=>'C-Four-A',
        'created_at'=>now(),
        'updated_at'=>now(),

       ]);
       Room::create([
        'room_name'=>'C-five-A',
        'created_at'=>now(),
        'updated_at'=>now(),

       ]);
       Room::create([
        'room_name'=>'C-five-B',
        'created_at'=>now(),
        'updated_at'=>now(),

       ]);
       Room::create([
        'room_name'=>'C-six-A',
        'created_at'=>now(),
        'updated_at'=>now(),

       ]);
       Room::create([
        'room_name'=>'C-seven-A',
        'created_at'=>now(),
        'updated_at'=>now(),

       ]);
       Room::create([
        'room_name'=>'C-seven-B',
        'created_at'=>now(),
        'updated_at'=>now(),

       ]);
       Room::create([
        'room_name'=>'C-eight-A',
        'created_at'=>now(),
        'updated_at'=>now(),

       ]);
       Room::create([
        'room_name'=>'C-eight-B',
        'created_at'=>now(),
        'updated_at'=>now(),

       ]);
       Room::create([
        'room_name'=>'C-eight-C',
        'created_at'=>now(),
        'updated_at'=>now(),

       ]);
       Room::create([
        'room_name'=>'C-four-F',
        'created_at'=>now(),
        'updated_at'=>now(),

       ]);
       Room::create([
        'room_name'=>'C-seven-D',
        'created_at'=>now(),
        'updated_at'=>now(),

       ]);
       Room::create([
        'room_name'=>'C-six-J',
        'created_at'=>now(),
        'updated_at'=>now(),

       ]);
       Room::create([
        'room_name'=>'C-two-C',
        'created_at'=>now(),
        'updated_at'=>now(),

       ]);

    }
}
