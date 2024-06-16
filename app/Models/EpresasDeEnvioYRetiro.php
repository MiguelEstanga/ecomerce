<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpresasDeEnvioYRetiro extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'sucursal',
        'logo',
    ];
    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class , 'id_sucursal');
    }

    public function retiro()
    {
        return $this->hasMany(Sucursal::class , 'id_epresas_de_envio_y_retiros');
    }
}
