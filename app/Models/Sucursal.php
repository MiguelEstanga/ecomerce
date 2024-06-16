<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory; 
    protected $fillable = [
        'direccion',
        'id_epresas_de_envio_y_retiros',
    ];

    
}
