<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;
class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Teacher::create([
            'firstName'=>'James',
            'lastName'=>'Kamau',
            'Email'=>'james@kamau.com',
            'phone'=>'0700013049',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Teacher::create([
            'firstName'=>'dennis',
            'lastName'=>'mugabi',
            'Email'=>'denis@kinyua.com',
            'phone'=>'0700013049',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Teacher::create([
            'firstName'=>'christine',
            'lastName'=>'mwende',
            'Email'=>'chris@mwede.com',
            'phone'=>'0700013049',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Teacher::create([
            'firstName'=>'kelvin',
            'lastName'=>'wabua',
            'Email'=>'kelvinwabua.com',
            'phone'=>'0700013049',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Teacher::create([
            'firstName'=>'Milicent',
            'lastName'=>'waja',
            'Email'=>'miliewaja@waja.com',
            'phone'=>'0700013049',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Teacher::create([
            'firstName'=>'John',
            'lastName'=>'joroge',
            'Email'=>'jonjoros@jon.com',
            'phone'=>'0700013049',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
