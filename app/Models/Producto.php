<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'id_categoria',
        'es_descueto',
        'descuento',
        'stop',
        'descripcion',
        'ventas',
        'inmagen_default',
        'precio',
        'tiempo_descuento',
       
    ];

    public function imagenes()
    {
        return $this->hasMany(Imagenes::class , 'id_producto');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class , 'id_categoria');
    }

    public function detalles()
    {
        return $this->hasMany(Detalles::class , 'id_producto');
    }
}
