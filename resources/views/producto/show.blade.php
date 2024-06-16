@extends('layouts.app')

@section('content')
    <div class="container producto-show row" style="margin-top: 50px; gap: 20px;">
        
            <div class=" row conten-image ">

                    <div class="col-md-3 coleccion-image">
                        @foreach( $imagenes as $imagen)
                             <div class="_conten-image">
                                <img
                                    style="border-radius: 10px" 
                                    width="100%" 
                                    height="100%" src="{{asset('storage/' . $imagen->imagenes)}}" alt="q">
                             </div>
                        @endforeach
                       
                    
                    </div>
                    <div class="image-main col-md-9">
                            <img width="100%" src="{{asset('storage/' . $producto->inmagen_default)}}" alt="">

                    </div>
            </div>
            <div class="informacion-data">
                <h2 
                    style="font-size:50px; font-weight: bold; color: black;"
                >Producto</h2>
                <h2>${{ $producto->precio }}</h2>
                <div>
                    
                        <div>
                            <input id="cantidad" class="form-control input" type="number" placeholder="1">
                        </div>
                        <div class="row boton">
                            <div class="col-md-6 boton-producto ">
                                <form action="{{ route('carrito') }}"  method="POST">
                                    @csrf
                                    <input hidden name="producto" value="{{$producto->id}}" type="text">
                                    <input hidden id="carrito_cantidad"  name="carrito_cantidad" class="form-control input" type="number" >
                                    <button class="bonton_ btn btn-success">
                                        Agregar al carrito
                                    </button>
                                </form>
                                <form action="">
                                    <input hidden id="carrito_checkout" class="form-control input" type="number" >
                                    <button class="bonton_ btn btn-success">
                                        Comprar ahora
                                    </button>
                                </form>    
                               
                                
                            </div>
                            
                        </div>
                   
                </div>
            </div>
            <div class="container detalles">
                <h2>Detalles</h2>
                <div>
                    <ul>
                        @foreach($producto->detalles as $detalle)
                            <li>{{$detalle->detalles}}</li>  
                        @endforeach
                       
                    </ul>
                </div>
            </div>
            
    </div>
    <div class="container recomendaciones">
        <div class="container ">
            <h2 class="alert font-weight-bold">
                Recomendaciones
            </h2>

            <div>
                <div class="container main-container">
                    @foreach($recomendaciones as $recomendacion)
                        <x-producto :producto="$recomendacion" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let cantidad = document.getElementById('cantidad');
            let carrito = document.getElementById('carrito_cantidad');
            let checkout = document.getElementById('carrito_checkout');
            cantidad.addEventListener('change', function() {
                carrito.value = this.value;
                checkout.value = this.value;
            });
        });
    </script>
    <style>
     .main-container {
            padding: 10px;
            background: #fff;
            border-radius: 5px;
            display: grid;
            place-content: center;  
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            margin-top: 20px;
            border-radius: 5px;
            gap: 20px;
        }
        .producto-show {
            padding: 20px;
            border-radius: 5px;
            background: #fff;
            margin-bottom: 20px;
            box-shadow: 5px 10px rgba(0,0,0,.4);
        }
        .image-main{
         
            padding: 10px;
            display: flex;
            justify-content: start;
            align-items: start;    
        }

        .imagen-main .imagen{
            background-color: black;
            width:400px;
            height: 400px;  
            
        }

        .coleccion-image{
           
            display: flex;
            
            gap: 20px;
            align-items: center;
            flex-direction: column;
            justify-content: start;    
            align-items: flex-start;
        }
        .conten-image  ._conten-image{
            width: 90px;
            height: 90px;
            border: solid 1px #ccc;
            border-radius: 10px;
        }
        .conten-image {
            
            display: flex;
           
            height: 450px;
            width: 50%;
           
        }
        .informacion-data{
            
            width: 30%;
          
        }
        .boton{
            margin-top: 20px;
        }
        .boton-producto{
            display: flex;
            gap: 20px;
          
            width: auto;
        }

        boton_{
            border-radius: 10px;
            height: 90px;
            width: auto;
            border:none;
            background-color:  #148f77 ;
            color: white;
        }

        .input{
            width: 300px;
        }
    </style>
     
@endsection        