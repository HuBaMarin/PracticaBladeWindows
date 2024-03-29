<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejemplo extends Model
{
    use HasFactory;

    protected $table = 'ejemplos';

    protected $fillable = [
        'dni',
        'nombre',
        'apellidos',
        'email'
    ];
}
