<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriaCompra extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_tipo_de_pago',
        'id_producto',
        'id_tranferencia',
        'id_paypal',
        'id_mercantil',
        'cantidad'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class , 'id_producto');
    }

  

   
}
