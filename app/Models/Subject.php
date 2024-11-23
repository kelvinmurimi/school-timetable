<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /** @use HasFactory<\Database\Factories\SubjectFactory> */
    use HasFactory;
    // Specify the table associated with the model
    protected $table = 'subjects';

    // Define fillable properties
    protected $fillable =
    [
        'subject_name',
        'subject_code',
        'subject_teacher', // Assuming you meant 'subject_teacher' instead of 'subject_de'
    ];
}
