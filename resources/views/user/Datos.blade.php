@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container row">
            <div class="col-md-3 menu_cliente">
                <x-menu-user />
            </div>
            <div class="col-md-8 cliente_data">
                    @if(session()->has('mensaje'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('mensaje') }}
                        </div>
                    @endif
                    <form  class="container row" action="{{route('user.update')}}" method="POST">
                        @csrf
                        <div class="container row">
                            <div class="row">
                                <div class="col-md-6 row g-3 align-items-center">
                                    <div class="col-auto">
                                        <label for="inputPassword6" class="col-form-label">Nombre</label>
                                      </div>
                                      <div class="col-auto">
                                        <input type="nombre" value="{{Auth::user()->name}}" name="nombre" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                                      </div>
                                </div>
                                <div class="col-md-6 row g-3 align-items-center">
                                    <div class="col-auto">
                                        <label for="inputPassword6" class="col-form-label">password</label>
                                      </div>
                                      <div class="col-auto">
                                        <input type="password"  name="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                                      </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-md-6 row g-3 align-items-center">
                                    <div class="col-auto">
                                        <label for="inputPassword6" class="col-form-label">Email</label>
                                      </div>
                                      <div class="col-auto">
                                        <input type="email" name="email" id="inputPassword6" value="{{Auth::user()->email}}" class="form-control" aria-describedby="passwordHelpInline">
                                      </div>
                                </div>
                                <div class="col-md-6 row g-3 align-items-center">
                                    <div class="col-auto">
                                        <label for="inputPassword6" class="col-form-label">Telefono</label>
                                      </div>
                                      <div class="col-auto">
                                        <input type="number" name="telefono" id="inputPassword6" class="form-control" value="{{Auth::user()->numero_telefono}}" aria-describedby="passwordHelpInline">
                                      </div>
                                </div>
                            </div>
                           
                        </div>
                        <hr>
                        <div class="container">
                            <button class="btn btn-primary" type="submit">
                                Editar Datos
                            </button>
                        </div>
                        <hr>
                    </form>
                    
               
            </div>
        </div>
    </div>
    <style>
        .container{
            margin-top:20px;
            gap: 10px;
        }
        .menu_cliente {
           background: rgba( 255, 255, 255, 0.8 );
        }

        .cliente_data{
            border:solid 1px #ccc;
            background: rgba( 255, 255, 255, 0.8 );
        }
    </style>
@endsection