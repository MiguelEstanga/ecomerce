<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tranferencia extends Model
{
    use HasFactory;
    protected $fillable = [
        'referencia',
        'numero_telefono',
        'fecha',
        'banco',
        'monto',
        'email',
        'id_pago',
        'id_estado',
        'id_user',
        'Comentario',
        'id_epresas_de_envio_y_retiro',
        'id_sucursal',
    ];

    public function User()
    {
        return $this->belongsTo(User::class , 'id_user');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class , 'id_estado');
    }

    public function tipoDePago()
    {
        return $this->belongsTo(TipoDePago::class , 'id');
    }

    public function HistorialCompra()
    {
        return $this->hasMany(HistoriaCompra::class ,  'id_tranferencia');
    }

    public function empresa_de_envio()
    {
        return $this->belongsTo(EpresasDeEnvioYRetiro::class , 'id_epresas_de_envio_y_retiros');
    }

    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class , 'id_sucursal');
    }
}
