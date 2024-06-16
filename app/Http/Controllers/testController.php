<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Detalles;
use App\Models\EpresasDeEnvioYRetiro;
use App\Models\imagenes as Imagenes;
class testController extends Controller
{
    //

    public function test(Request $request)
    {
    
        Categoria::create(["nombre" => "Categoria 1",]);
        Categoria::create(["nombre" => "Categoria 2",]);
        Categoria::create(["nombre" => "Categoria 3",]);
        Categoria::create(["nombre" => "Categoria 4",]);
        Categoria::create(["nombre" => "Categoria 5",]);

       
        for( $i = 0; $i <= 19; $i++)
        {
            $numero_aleatorio = random_int(1,5 );
            $producto= Producto::create([
                'nombre' => "nombre ".$i,
                'id_categoria' =>$numero_aleatorio,
                'es_descuento' => 0,
                'descuento' => 0,
                'tiempo_descuento' => 0,
                'descripcion' => 'descripcion '.$i,
                'stop' =>  random_int(1, 20),
                'ventas' => 0,
                'inmagen_default' => 'imagenes/default.jpg',
                'precio' => random_int(10, 200),
            ]);
            Detalles::create([ 'id_producto' => $producto->id, 'detalles' => "Detalle 1"]);
            Detalles::create([ 'id_producto' => $producto->id, 'detalles' => "Detalle 2"]);
            Detalles::create([ 'id_producto' => $producto->id, 'detalles' => "Detalle 3"]);
            Detalles::create([ 'id_producto' => $producto->id, 'detalles' => "Detalle 4"]);
            Detalles::create([ 'id_producto' => $producto->id, 'detalles' => "Detalle 5"]);
            Detalles::create([ 'id_producto' => $producto->id, 'detalles' => "Detalle 6"]);
    
           
        }

        return 'listo';
    }
}
