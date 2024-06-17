<?php

namespace App\Http\Controllers;

use App\Models\CacheEmpresaDeEnvioYRetiro;
use Illuminate\Http\Request;
use App\Models\Tranferencia;
use App\Models\carrito;
use App\Models\Producto;
use App\Models\HistoriaCompra;
use Illuminate\Support\Facades\Auth;
class TranferenciaController extends Controller
{
    //
    public function cache_registrar(Request $request)
    {
        
       CacheEmpresaDeEnvioYRetiro::create([
           'id_epresas_de_envio_y_retiro' => $request->empresa_de_envio,
           'id_sucursal' => $request->sucursal,
           'id_user' => Auth::user()->id,
       ]);

       return back();
    }

    public function retirado(Request $request)
    {
       
        $Tranferencia = Tranferencia::find($request->id);

        $Tranferencia->id_estado = 1;
        $Tranferencia->save();
        return  back()->with('mensage', 'Gracias por colaborar con nuestro negocio que tenga un buen día.');
    }

    public function tranferencia(Request $request)
    {   
       $carrito = carrito::where( 'id_user' , Auth::user()->id)->get();
      
          
       
       $envio = CacheEmpresaDeEnvioYRetiro::where('id_user', Auth::user()->id)->first();
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
            'id_epresas_de_envio_y_retiro' => $envio->id_epresas_de_envio_y_retiro ?? null,
            'id_sucursal' => $envio->id_sucursal ?? null,
            
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

        $envio->delete();

       

        
       return redirect()->route('user.index', [Auth::user()->id]);
    }

    public function Paypal(Request $request)
    {
                
               
                $envio = CacheEmpresaDeEnvioYRetiro::where('id_user', Auth::user()->id)->first();
                $carrito = carrito::where( 'id_user' , Auth::user()->id)->get();
                
                $monto = 0;

                for ($i = 0; $i < count($carrito); $i++) {
                    $monto = $monto + $carrito[$i]->cantidad * $carrito[$i]->producto->precio;
                }
                $tranferencia = Tranferencia::create([
                        'id_user' => Auth::user()->id,
                        'referencia' => $request->PayerID,
                        'numero_telefono' => Auth::user()->numero_telefono ?? 'N/A',
                        'email' => Auth::user()->email ?? 'N/A',
                        'fecha' => date('d/m/Y') ,
                        'monto'=> $monto,
                        'banco' => 'pago con Paypal',
                        'id_estado' => 3 ,
                        'id_pago' => 2,
                        'id_epresas_de_envio_y_retiro' => $envio->id_epresas_de_envio_y_retiro?? null,
                        'id_sucursal' => $envio->id_sucursal ?? null,
                ]);
                
       
                foreach ($carrito as $carrito) {

                    HistoriaCompra::create([
                        'id_user' => Auth::user()->id,
                        'id_tipo_de_pago' => 2 ,
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
              
       
                $envio->delete();
        
                return redirect()->route('user.index', [Auth::user()->id]);
    }   
}
