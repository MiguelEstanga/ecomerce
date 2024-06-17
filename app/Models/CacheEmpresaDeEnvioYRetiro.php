<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CacheEmpresaDeEnvioYRetiro extends Model
{
    use HasFactory;
    protected $fillable = ['id_epresas_de_envio_y_retiro', 'id_sucursal' , 'id_user'];
}
