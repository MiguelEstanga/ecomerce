@extends('layouts.app')

@section('content')
    <div class="container" style="height: auto!important;">
        <div class="container row">
            <div class="col-md-3 menu_cliente">
                <x-menu-admin />
            </div>
            <div class="col-md-8 col-sm-6 cliente_data" style="height: auto!important;">
                <div class="row">
                  
                </div>
                @if(session()->has('mensaje'))
                    <div class="container">
                        <h2 class="alert alert-success">
                           {{ session()->get('mensaje') }}
                        </h2>
                    </div>
                @endif
                
            </div>
        </div>
    </div>

   
      
    <style>
        .container{
            height: auto!important;
            margin-top:20px;
           
        }
        .menu_cliente {
          
        }
        .imput_imagen{
            width:500px!important;
            
        }
        .container_imagenes{
            display: flex;
           
            align-items: center;
        }
    </style>
 
@endsection