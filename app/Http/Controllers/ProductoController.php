<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
   
    public function show(string $id)
    {
        
      $producto = Producto::where('id', $id)->first();
      $imagenes =  $producto->imagenes()->paginate(4);
      $producto->categoria;
      $recomendaciones = DB::table('productos')
        ->where('id_categoria', $producto->categoria->id)
        ->orderByRaw('RAND()')
        ->limit(5)
        ->get();
    
      
        return view('producto.show' , compact('producto' , 'imagenes' , 'recomendaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function buscar($categoria)
    {
         $productos = Producto::where('id_categoria', $categoria)
            ->get()
        ;
          $nombreCategoria = Categoria::find($categoria);
         $categorias = Categoria::all();
        return view('producto.busqueda' , [
            'productos' => $productos,
            'categorias' => $categorias,
            'filterName' =>$nombreCategoria->nombre
        ]);
    }

    public function producto_name(Request $request)
    {
       
        $categorias = Categoria::all();
        $producto = Producto::where('nombre', 'like',"%$request->nombre%")
            ->get();
        return view('producto.busqueda' , [
            'productos' => $producto,
            'categorias' => $categorias,
            'filterName' => $request->name
        ]);
    }
   
}
