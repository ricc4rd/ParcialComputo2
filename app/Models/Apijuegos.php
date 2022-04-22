<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apijuegos extends Model
{
    protected $fillable = ['codigo', 'nombre del juego', 'categoria', 'cantidad', 'precio'];
}
