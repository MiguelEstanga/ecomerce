<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tranferencia;
use App\Models\User;
class UserController extends Controller
{
        public function perfil()
        {
            
            //return Auth::user()->ordenes_de_pagos[0]->HistorialCompra[0]->producto->precio;
            $OrdenesDePagos = Tranferencia::where('id_user', Auth::user()->id)
                ->where('id_estado', '=', 3)
                ->OrWhere('id_estado', '=', 2)
                ->OrWhere('id_estado', '=', 4)
                ->orderBy('id', 'desc')

                ->paginate(10);
            return view('user.perfil', 
            [
                'OrdenesDePagos' => $OrdenesDePagos,
            ]
            );
        }

        //ordenes pagadas
        public function ordenes_pagadas()
        {
          
            $OrdenesDePagos = Tranferencia::where('id_user', Auth::user()->id)
                ->where('id_estado', '=', 1)
                ->orderBy('id', 'desc')
                ->paginate(10);

                
                return view('user.perfil', 
                    [
                        'OrdenesDePagos' => $OrdenesDePagos,
                    ]
                );
        }


        public function detalle($id)
        {
           //return Tranferencia::where('id', $id)->first();
           return view('user.detalles', 
            [
                'HistorialCompra' => Tranferencia::where('id', $id)->first()->HistorialCompra,
                'Tranferencia' => Tranferencia::where('id', $id)->first(),
            ]   
            );
        }

        public function datos($id)
        {
            return view('user.datos', 
            [
                'Datos' => Auth::user(),
            ]
            );
        }

        public function update(Request $request)
        {
           
            $usuario = User::find(Auth::user()->id);
            $usuario->name = $request->nombre;
            $usuario->email = $request->email;
            $usuario->numero_telefono = $request->telefono;
            if($request->password != null)
            {
                $usuario->password = bcrypt($request->password);
            }
            $usuario->save();
            return back()->with('mensage', 'Datos actualizados');
        }
}   
