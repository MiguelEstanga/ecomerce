@extends('layouts.app')

@section('content')
    <div class="container" style="height: auto!important;">
        <div class="container row">
            <div class="col-md-3 menu_admin">
                <x-menu-admin />
            </div>
            <div class="col-md-8 col-sm-6 data_admin" style="height: auto!important;">
                <div class="row">
                    @if(session()->has('mensaje'))
                    <div class="container">
                        <h2 class="alert alert-success">
                           {{ session()->get('mensaje') }}
                        </h2>
                    </div>
                @endif
                    <div class="container formulario " >
                        <form  @if($mode == 'CREAR') action="{{ route('admin.store_categoria') }}" @elseif($mode == 'EDITAR')   action="{{ route('admin.editar_categoria_put', $categoria->id) }}"  @endif method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="container row">
                                <div class="col-md-2" style="display: flex; justify-content: center; align-items: center;">
                                
                                </div>
                                <div class="col-md-6">
                                    @if($mode == "CREAR")
                                    
                                     <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                                     <input type="file" class="form-control" id="imagen" name="imagen" placeholder="Imagen">
                                    @elseif($mode == "EDITAR")
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{$categoria->nombre}}">
                                        <input type="file" class="form-control" id="imagen" name="imagen" placeholder="Imagen" value="{{$categoria->imagen}}">
                                    @endif
                                   
                                </div>
                                <div class="col-md-2">
                                    @if($mode == "CREAR")
                                    <button class="btn btn-primary" type="submit">Guardar</button>
                                    @elseif($mode == "EDITAR")
                                    <button class="btn btn-success" type="submit">Editar</button>
                                    <a href="{{route('admin.create_categoria')}} " class="btn btn-danger">X</a>
                                    @endif
                                    
    
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
                <div class="container">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>    
                        </thead>
                        <tbody>
                            @foreach($categorias as $categoria)
                                <tr>    
                                    <td>{{ $categoria->id }}</td>
                                    <td><img width="50px" height="50px" src="{{ asset('storage/'. $categoria->imagen) }}" alt=""></td>
                                    <td>{{ $categoria->nombre }}</td>
                                    <td>
                                       <a class="btn btn-success" href="{{route('admin.editar_categoria' , $categoria->id)}}">Editar</a>                               
                                    </td>
                                    <td> 
                                        <form action="{{route('admin.eliminar_categoria', $categoria->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $categoria->id }}">
                                            <button class="btn btn-danger" type="submit">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            @if(count($categorias) > 0 )
                            {{$categoria->links}}
                            @endif
                           
                        <tbody>

                            

                    </table>
                </div>
               
                
            </div>
        </div>
    </div>
 
    <style>
        .container.formulario{
           
           
            grid-gap: 10px;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
        }
    </style>
   
 
@endsection