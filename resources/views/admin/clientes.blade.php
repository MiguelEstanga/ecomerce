@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container row">
            <div class="col-md-3 menu_admin">
                <x-menu-admin />
            </div>
            <div class="col-md-8 data_admin">
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
                            <th> email</th>
                            <th> Número de telefono</th>
                            <th> Rol</th>
                           
                       </tr>
                    </thead>
                    <tbody id="table-sucursa">
                      
                            @foreach( $usuarios as $usuario  )
                             <tr>
                                <td>{{$usuario->id}}</td>
                                <td>{{$usuario->name}}</td>
                                <td>{{$usuario->email}}</td>
                                <td>{{$usuario->telefono}}</td>
                                <td>{{$usuario->rol}}</td>
                            </tr>
                            @endforeach
                       
                    </tbody>
                </table>
               
                  
            </div>
        </div>
    </div>
    
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