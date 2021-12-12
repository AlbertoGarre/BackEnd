<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'precio',
        'cualidad1',
        'cualidad2',
        'cualidad3',
        'cualidad4',
    ];
}
