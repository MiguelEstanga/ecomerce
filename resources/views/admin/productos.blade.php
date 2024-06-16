@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container row">
            <div class="col-md-3 menu_cliente">
                <x-menu-admin />
            </div>
            <div class="col-md-8 cliente_data">
                @if(session()->has('mensage'))
                    <h2 class="alert alert-success">
                        {{session()->get('mensage')}}
                    </h2>
                @endif
                <table class="table table-striped">
                    <thead>
                       <tr>
                            <th> Id </th>
                            <th> Nombre</th>
                            <th> imagen</th>
                            <th> Precio</th>
                            <th> Ventas</th>
                            <th> Stop</th>
                            <th>Editar</th>
                       </tr>
                    </thead>
                    <tbody id="table-sucursa">
                       <td>
                          @foreach($productos as $producto)
                            <tr>
                                <td>{{ $producto->id }}</td>
                                <td>{{ $producto->nombre }}</td>
                                <td>
                                    <img width="100px" src="{{asset( 'storage/' .$producto->inmagen_default)}}" alt="imagen">
                                </td>
                                <td>{{ $producto->precio }}</td>
                                <td>{{ $producto->ventas }}</td>
                                <td>{{ $producto->stop }}</td>
                                <td><a href="{{route('admin.editar_producto', $producto->id)}}">Editar</a></td>
                            </tr>
                          @endforeach
                       </td>
                    </tbody>
                </table>
               
                  
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded',  () =>  {
           var sucursales = document.querySelectorAll('.sucursales');
           var url = `{{route('admin.sucursales' , 'x')}}`;
           var table = document.querySelector('#table-sucursa');
           var parse = url.split('x')[0]
           console.log(parse)
           sucursales.forEach(element => {
                element.addEventListener('click', function(event) {
                    
                    fetch(`${parse}${event.target.id}`)   
                     .then(res => res.json())
                     .then(res => {
                        console.log(res)
                        for(var i = 0; i < res.length; i++)
                        {
                            var row = document.createElement('tr');
                            row.innerHTML = `
                                <th>${res[i].id}</th>
                                <th>${res[i].direccion}</th>
                            `
                            table.appendChild(row);
                        }
                        
                        console.log(res)
                     })
                    
                    console.log(event.target.id)
                })
           });
        });
    </script>
    <style>
        .container{
            margin-top:20px;
            gap: 10px;
        }
        .menu_cliente {
       
        }

        .cliente_data{
          
        }
    </style>
@endsection