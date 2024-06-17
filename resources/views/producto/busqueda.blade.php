@extends('layouts.app')

@section('content') 

    <div class="container categoria-main  ">
        @foreach ($categorias as $categoria)
            <a class="categoria " href="{{route('producto.buscar', $categoria->id)}}">
                {{$categoria->nombre}}
            </a> 
        @endforeach   


    </div>
    <div class="alert alert-success" role="alert">
            {{$filterName}}
    </div>
    @if( count($productos) == 0)
        <div class="alert alert-danger" role="alert">
            No hay productos que coincidan con la búsqueda
        </div>
    @else
        <div class="container productos ">  
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Descripción</th>
                        <th>Ventas</th>
                        <th>Stop</th>
                    </tr>   
                </thead>
                <tbody >
                    @foreach($productos as $producto)
                      
                            <tr class="producto_item">
                                <th>
                                    <a href="{{route('producto.show', $producto->id)}}" style="cursor: pointer">
                                        <img width="60px" height="60px" src="{{asset('storage/' . $producto->inmagen_default)}}" alt="">
                                    </a>
                                   
                                </th>
                                <th>{{$producto->nombre}}</th>
                                <th>{{$producto->precio}}</th>
                                <th>{{$producto->descripcion}}</th>
                                <th>{{ $producto->ventas }}</th>
                                <th>{{ $producto->stop }}</th>
                            </tr>
                      
                    @endforeach
                </tbody>
            </table>
           
        </div>
    @endif
   
    <style>
        .producto_item{
            cursor: cell;
            transition: all 0.3s ease;
        }
        .producto_item:hover{
            box-shadow: 0 0 10px #000;
        }
        .productos{
            display: grid;
          
            background: rgb(255, 255, 255 , .5);
            margin-top: 10px;
            padding: 20px;
            border-radius: 10px;
            gap: 10px;
            height: auto;
        }

        .categoria-main{
            background: rgb(255, 255, 255 , .5);
            z-index: 0;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            display: flex;
            gap: 20px;
       
      
      }

      .categoria-main .categoria{
          z-index: 1000;
          text-decoration: none;
          transition: all 0.3s ease;
          padding: 10px;
      
          border-radius: 10px;
          color: #000;
        
        }

        .categoria-main .categoria.active{
            background: rgb(255, 255, 255 , 1);
            color: #000;
        }
    </style>
@endsection