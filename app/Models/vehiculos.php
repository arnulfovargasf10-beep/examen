<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vehiculos extends Model
{
    protected $fillable = [
    'placa',
    'marca',
    'modelo',
    'tipo de vehiculo',
    'color',
    'capacidad',
    'tarifa diaria',
    'estado', 
    ];
}
