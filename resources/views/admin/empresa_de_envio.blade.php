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
                            <td> Id </td>
                            <td> Nombre</td>
                            <td> Sucursales</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($empresas as $empresa)
                            <tr>
                                <td>{{ $empresa->id }}</td>
                                <td>{{ $empresa->nombre }}</td>
                                <td> 
                                    <a type="button" class="btn btn-primary sucursales" data-bs-toggle="modal" data-bs-target="#exampleModal" id="{{$empresa->id}}">
                                        Sucursales
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td> Id </td>
                                        
                                        <td> Direccion</td>
                                    </tr>
                                </thead>
                                <tbody id="table-sucursa">
                                   
                                </tbody>
                            </table>
                            <div class="container">
                                <form action="{{route('admin.store_sucursales' , $empresa->id)}}" method="POST">
                                    @csrf
                                    <div class="container row">
                                        <div class="col-md-6">
                                            <label class="form-label">
                                                Dirección
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="direccion" placeholder="Direccion">
                                        </div>
                                    </div>
                                    <div class="container">
                                        <button class="btn btn-primary" type="submit">
                                            Agregar nueva sucursal
                                        </button>
                                    </div>
                                   
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  
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