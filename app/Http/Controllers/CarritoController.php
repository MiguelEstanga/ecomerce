<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Carrito;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    public function index()
    {
        if(  Auth::check() ){
            $carrito = Carrito::where('id_user', Auth::user()->id)->get();
        }else{
            $carrito = Carrito::where('session', session()->getId())->get();
        }
       
        return view('carrito.index' , compact('carrito'));
    }
    public function carrito(Request $request)
    {
         $request->all();
        $producto = Producto::findOrFail($request->producto);
        if( $request->cantidad > $producto->stop ) return 'cantidad superada';
        $carrito = [];
        if( Auth::check() ){
            $carrito_session = Carrito::where('id_producto', $producto->id)->where('id_user', Auth::user()->id)->first();
            if($carrito_session){
                $carrito = Carrito::where('id_producto', $producto->id)->where('session', session()->getId())->first();
                $carrito->cantidad = $carrito->cantidad + $request->carrito_cantidad;
                $carrito->save();
            }else{
                $carrito = Carrito::create([
                    'id_producto' => $producto->id,
                    'id_user' => Auth::user()->id,
                    'cantidad' => $request->carrito_cantidad,
                    'session' => session()->getId(),
                ]);
            }
        }else{
            
            $carrito_session = Carrito::where('session', $request->session()->getId())->where('id_producto', $producto->id)->exists();
            if($carrito_session){
                $carrito = Carrito::where('id_producto', $producto->id)->where('session', $request->session()->getId())->first();
                $carrito->cantidad = $carrito->cantidad + $request->carrito_cantidad;
                $carrito->save();
            }else{
                $carrito = carrito::create([
                    'id_producto' => $producto->id,
                    'cantidad' => $request->carrito_cantidad,
                    'session' => session()->getId(),
                ]);

            }
         
        }

        
        return  back()->with('mensage' , 'Producto agregado al carrito');
    }

    public function actulizar_carrito(Request $request)
    {
        $carrito = carrito::where('session', session()->getId());
        
        if($carrito->exists())
        {
           
             $carrito = $carrito->where('id', $request->carrito_id)->first();
            $carrito->cantidad = $request->carrito_cantidad;
            $carrito->save();
        }
        return back()->with('mensage' , 'Cantidad actualizada correctamente');
    }

    public function eliminar_carrito(Request $request)
    {
        $carrito = carrito::where('session', session()->getId())->where('id', $request->carrito_id)->first();
        $carrito->delete();
        return back()->with('mensage' , 'Carrito eliminado correctamente');
    }

    public function checkout()
    {
        $carrito = carrito::where('session', session()->getId() )->get();
        return view('checkout.index' , compact('carrito'));
    }
}
