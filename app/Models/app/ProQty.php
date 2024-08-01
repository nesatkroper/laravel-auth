<?php

namespace App\Models\app;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProQty extends Model
{
    use HasFactory;

    protected $table = 'pro_qties';
    protected $primaryKey = 'id';
    protected $fillable = [
        'pro_id',
        'qty',
    ];
}
