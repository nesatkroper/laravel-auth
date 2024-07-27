<?php

namespace App\Models\app;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'gender',
        'mobile',
        'email',
        'address',
        'status',
    ];
}
