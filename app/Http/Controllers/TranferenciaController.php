<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tranferencia;
use App\Models\carrito;
use App\Models\Producto;
use App\Models\HistoriaCompra;
use Illuminate\Support\Facades\Auth;

class TranferenciaController extends Controller
{
    //

    public function tranferencia(Request $request)
    {   
       $carrito = carrito::where( 'id_user' , Auth::user()->id)->get();
       $tranferencia = Tranferencia::create([
            'id_user' => Auth::user()->id,
            'referencia' => $request->referencia,
            'numero_telefono' => $request->numero_telefono,
            'email' => $request->email,
            'fecha' => $request->fecha,
            'monto'=> $request->monto,
            'banco' => $request->banco,
            'id_estado' => 3 ,
            'id_pago' => 1,
            'id_epresas_de_envio_y_retiros' => $request->empresa_de_envio ?? null,
            'sucursal' => $request->sucursal ?? null,
       ]);
     
       
        foreach ($carrito as $carrito) {

            HistoriaCompra::create([
                'id_user' => Auth::user()->id,
                'id_tipo_de_pago' => 1 ,
                'id_producto' => $carrito->id_producto,
                'id_tranferencia' => $tranferencia->id,
                'cantidad' => $carrito->cantidad,
            ]);

            $producto = Producto::where('id', $carrito->id)->first();
            $producto->stop = $producto->stop - $carrito->cantidad;
            $producto->ventas = $producto->ventas + 1;
            $producto->save();
            $carrito->delete();
        }

       

        
       return redirect()->route('user.index', [Auth::user()->id]);
    }
}
