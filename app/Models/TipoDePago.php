<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDePago extends Model
{
    use HasFactory;
    protected $fillable = ['tipo_pago'];

    public function tranferencias()
    {
        return $this->hasMany(Tranferencia::class); 
    }
}
