<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';

    // Specify the primary key if it differs from the default 'id'
    protected $primaryKey = 'student_number';

    // Specify fillable fields
    protected $fillable = [
        'first_name', 'middle_name', 'last_name', 'suffix_name',
        'age', 'gender', 'birthdate', 'contact', 'email_address',
        'religion', 'civil_status', 'nationality', 'street_address',
        'section', 'course', 'year', 'program'
    ];
}
