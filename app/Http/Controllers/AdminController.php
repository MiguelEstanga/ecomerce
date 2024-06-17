<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\EpresasDeEnvioYRetiro;
use App\Models\Sucursal;
use Illuminate\Support\Facades\Storage;
use App\Models\Detalles;
use App\Models\imagenes as Imagenes;
use App\Models\Tranferencia;
use App\Models\Estado;
use App\Models\Dolar;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        return view('admin.show');
    }

    public function dolar()
    {
        $dolar = Dolar::first();
        return view('admin.dolar' ,[ 'dolar' => $dolar]);
    }

    public function clientes()
    {
        return view('admin.clientes' , ['usuarios' => User::permission('user')->get() ]);
    }

    public function crear_admin()
    {
       $admin = User::permission('admin')->get(); 
        return view('admin.crear_admin' , ['admin' => $admin]);
    }

    public function crear_admin_post(Request $request)
    {
         $request->all();
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'numero_telefono' => $request->telefono,
          
        ])->assignRole('admin');
        return back()->with('mensage' , 'Usuario creado correctamente');
    }
    public function actulizar_dolar(Request $request)
    {
         $dolar = Dolar::first();
        $dolar->precio = $request->dolar;
        $dolar->save();
        return back()->with('mensaje' , 'Precio del dolar actualizado correctamente');
    }
    
     public function producto()
     {
        $productos = Producto::simplePaginate(10);
        return view('admin.productos', [
            'productos' => $productos
        ]);
     }

   public function crear_producto()
   {
        $categorias = Categoria::all();
        $empresa_de_envio = EpresasDeEnvioYRetiro::all();
        return view('admin.create_producto', [
            'categorias' => $categorias,
            'empresa_de_envio' => $empresa_de_envio
        ]);
   }

   public function editar_producto($id)
   {
       return  $producto = Producto::find($id);
        $categorias = Categoria::all();
        $empresa_de_envio = EpresasDeEnvioYRetiro::all();
        
   }
   public function producto_store(Request $request)
   {
      //return $request->all();

        $producto= Producto::create([
            'nombre' => $request->nombre,
            'id_categoria' => $request->categoria,
            'es_descuento' => $request->es_descuento,
            'descuento' => $request->descuento == 0 ? null : $request->tiempo_descuento,
            'tiempo_descuento' => $request->descuento == 0 ? null : $request->tiempo_descuento ?? 0,
            'stop' => $request->Stop,
            'descripcion' => $request->descripcion_main,
            'ventas' => 0,
            'inmagen_default' =>  $request->file('imagen')->store('imagenes' , 'public') ,
            'precio' => $request->precio,
        ]);

        if(count($request->descripcion) > 0)
        {
            for( $i = 0; $i < count($request->descripcion); $i++)
            {
                Detalles::create([
                    'id_producto' => $producto->id,
                    'detalles' => $request->descripcion[$i],
                ]);
            }
        }

        if( count($request->imagenes) > 0)
        {
            for( $i = 0; $i < count($request->imagenes); $i++)
            {
                $imagen = $request->file('imagenes')[$i];
                

                Imagenes::create(
                    [
                        'id_producto' => $producto->id,
                        'imagenes' => $imagen->store('imagenes' , 'public'),
                    ]
                );

            }
        }
        //return $producto->id;
        return back()->with('mensaje' , 'Producto creado correctamente');
   }

   public function crear_categoria( Request $request)
   {
        $mode = "CREAR";
        $categorias = Categoria::paginate(10);

        return view('admin.crear_categoria' , [
            'mode' => $mode,
            'categorias' => $categorias,
            
        ]);
   }

   public function store_categoria(Request $request)
   {
         $imagen = $request->file('imagen')->store('imagen' , 'public') ?? null;
        Categoria::create([
            'nombre' => $request->nombre,
            'imagen' => $imagen,
        ]);
        return back()->with('mensaje', 'Se ha creado la categoría exitosamente');
   }

   public  function editar_categoria($id)
   {
        $mode = 'EDITAR';
        $categoria = Categoria::find($id);
        $categorias = Categoria::paginate(10);
        return view('admin.crear_categoria' , [
            'mode' => $mode,
            'categorias' => $categorias,
            'categoria' => $categoria
        ]);
   }

   public function eliminar_categoria($id)
   {
      Categoria::destroy($id);
      return back()->with('mensaje', 'Se ha eliminado la categoría exitosamente');
   }

   public function editar_categoria_put( Request $request ,$id)
   {
        $categoria = Categoria::find($id);
        $categoria->nombre = $request->get('nombre');
        if( $request->hasFile('imagen'))
        {
            $imagen = $request->file('imagen')->store('imagen' , 'public') ?? null;
            $categoria->imagen =$imagen ;
        }
        $categoria->save();

        return back()->with('mensage' , 'Categoria editada correctamente');
   }

   public function crear_empresa_de_envio()
    {
        return view('admin.crear_empresa_de_envio');
    }

    public function store_empresa_de_envio(Request $request)
    {
       // return $request;
        $empresa = EpresasDeEnvioYRetiro::create ([
            'nombre' => $request->nombre,
            'sucursal' => '',
            'logo' => '',
        ]);
      
        for($i = 0; $i <count($request->sucursal); $i++)
        {
            Sucursal::create([
                'id_epresas_de_envio_y_retiros' => $empresa->id,
                'direccion' => $request->sucursal[$i],
            ]);
        }
        

        return back()->with('mensaje' , 'Empresa creada correctamente');
    }

    public function empresa_de_envio()
    {
        $empresas = EpresasDeEnvioYRetiro::all();
        return view('admin.empresa_de_envio', [
            'empresas' => $empresas
        ]);
    }

    public function sucursales($id)
    {
        $empresa = EpresasDeEnvioYRetiro::find($id);
        return response()->json($empresa->retiro);
    }

    public function store_sucursales(Request $request , $id)
    {
       Sucursal::create([
            'id_epresas_de_envio_y_retiros' => $id,
            'direccion' => $request->direccion,
        ]);
        return  back()->with('mensage' , 'Sucursal creada correctamente');
    }

    public function ordenes_no_pagas()
    {
        $ordenes = Tranferencia::where('id_estado', '=', 3)->paginate(10);
        return view('admin.ordenes_no_pagas', [
            'OrdenesDePagos' => $ordenes
        ]);
    }

    public function ordenes_en_envio()
    {
        $ordenes = Tranferencia::where('id_estado', '=', 4)->paginate(10);
        return view('admin.ordenes_no_pagas', [
            'OrdenesDePagos' => $ordenes
        ]);
    }

    public function ordenes_pagas()
    {
        $ordenes = Tranferencia::where('id_estado', '=', 1)->paginate(10);
        return view('admin.ordenes_no_pagas', [
            'OrdenesDePagos' => $ordenes
        ]);
    }
    public function detalles($id)
    {
        return view('admin.detalles', 
            [
                'HistorialCompra' => Tranferencia::where('id', $id)->first()->HistorialCompra,
                'Tranferencia' => Tranferencia::where('id', $id)->first(),
                'Estado' => Estado::all(),
            ]   
            );
    }

    public function editar_orden_estan($id , Request $request)
    {
       //return $request->all();

         $tranferencia = Tranferencia::find($id);
         if($request->cambiar_empresa_de_envio == 1)
         {
             $tranferencia->id_epresas_de_envio_y_retiro = $request->id_epresas_de_envio_y_retiro;
             $tranferencia->id_sucursal = $request->id_sucursal;
         }
         $tranferencia->id_estado = $request->estado;
         $tranferencia->Comentario = $request->comentario;
         $tranferencia->save();

         return back()->with('mensage' , 'Estado actualizado correctamente');
        
    }

    
}
