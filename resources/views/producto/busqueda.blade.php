@extends('layouts.app')

@section('content') 

    <div class="container categoria-main  ">
        @foreach ($categorias as $categoria)
            <a class="categoria {{$nombreCategoria->id == $categoria->id ? "active" :"" }}" href="{{route('producto.buscar', $categoria->id)}}">
                {{$categoria->nombre}}
            </a> 
        @endforeach   


    </div>
    <div class="alert alert-success" role="alert">
            {{$nombreCategoria->nombre}}
    </div>
    <div class="container productos ">  

        @foreach($productos as $producto)
            <x-producto :producto="$producto" />
        @endforeach
    </div>
    <style>
        .productos{
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            background: rgb(255, 255, 255 , .5);
            margin-top: 30px;
            padding: 20px;
            border-radius: 10px;
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