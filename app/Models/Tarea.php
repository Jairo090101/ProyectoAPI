<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    //Campos que deben ser rellenados
    protected $fillable = [
        'titulo', 
        'descripcion', 
        'estado', 
        'fecha_limite'
        ];

}
