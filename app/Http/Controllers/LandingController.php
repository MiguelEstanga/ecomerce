<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Nette\Utils\Random;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cantidad_categorias = Categoria::count();
        $numero_aleatorio = random_int(1, $cantidad_categorias );
        
        $fila1 = Producto::where('id_categoria',random_int(1, $cantidad_categorias ))->paginate(20);
        $fila2 = Producto::where('id_categoria', random_int(1, $cantidad_categorias ))->paginate(20);
        $fila3 = Producto::where('id_categoria', random_int(1, $cantidad_categorias ))->paginate(20);
        $fila4 = Producto::where('id_categoria', random_int(1, $cantidad_categorias ))->paginate(20);
        
        $mas_vendido = Producto::orderBy('ventas' , 'ASC')->paginate(6);
        $categorias = Categoria::all();
        return view('landing.index' , [
            'fila1' => $fila1,
            'fila2' => $fila2,
            'fila3' => $fila3,
            'fila4' => $fila4,
            'categorias' => $categorias,
            'mas_vendido' => $mas_vendido
        ]);   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
