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
                <form action="{{route('admin.crear_admin_post')}}" method="POST">
                    @csrf
                    <div class="container">
                         <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                              <input type="text" name="email" class="form-control" id="staticEmail" >
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                              <input type="password" name="password" class="form-control" id="inputPassword" >
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Telefono</label>
                            <div class="col-sm-10">
                              <input type="text" name="telefono" class="form-control" id="inputPassword" >
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                              <input type="text" name="name" class="form-control" id="inputPassword" >
                            </div>
                          </div>
                       
                    </div>
                    <div class="container">
                        <button class="btn btn-primary" type="submit">
                            Crear
                        </button>
                    </div>
                </form>
                <div class="container">
                    <table class="table table-striped">
                        <thead>
                           <tr>
                               <th> Id </th>
                               <th> Nombre</th>
                               <th> email</th>
                               <th> Número de telefono</th>
                             
                           </tr>
                        </thead>
                        <tbody>
                            @foreach($admin as $admin)
                             <tr>
                                <td>{{$admin->id}}</td>
                                <td>{{$admin->name}}</td>
                                <td>{{$admin->email}}</td>
                                <td>{{$admin->numero_telefono}}</td>
                                
                            </tr>
                             @endforeach
                        </tbody>
                      </table>
                    
                </div>
                  
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