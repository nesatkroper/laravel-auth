<?php

namespace App\Models\app;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = [
        'photo',
        'fname',
        'lname',
        'gender',
        'email',
        'mobile',
        'address',
        'pob',
        'dob',
        'status'
    ];
}
