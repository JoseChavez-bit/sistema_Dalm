<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;

    // Especificar los campos que se pueden llenar
    protected $fillable = ['producto', 'cantidad', 'precio'];
}
