@extends('layouts.app')

@section('content')
    <div class="container" style="height: auto!important;">
        <div class="container row">
            <div class="col-md-3 menu_cliente">
                <x-menu-admin />
            </div>
            <div class="col-md-8 col-sm-6 cliente_data" style="height: auto!important;">
                
                <div class="container">
                    <form action="{{route('admin.dolar.post')}}" method="POST">
                        @csrf
                        <div class="container row">
                            <div class="col-md-12">
                                <label for="inputPassword6" class="col-form-label">Precio del dolar en bs</label>
                                <input type="number" name="dolar" class="form-control" id="inputPassword6 " value="{{$dolar->precio}}" aria-describedby="passwordHelpInline" name="precio">
                            </div>
                        </div>
                     
                        <div class="container">
                            <button class="btn btn-primary" type="submit">
                                Actualizar precio del dolar
                            </button>
                        </div>
                    </form>
                </div>
                
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