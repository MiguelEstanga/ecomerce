@extends('layouts.app')

@section('content')
    <div class="container producto-show row" style="margin-top: 50px; gap: 20px;">
            <div class="container-show" >   
                    <div class=" row  conten-image ">

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
                            
                        >Producto</h2>
                        <h3>${{ $producto->precio }}</h3>
                        <div>
                            
                                <div class="cantidad">
                                    <input id="cantidad"  class=" form-control input" type="number" placeholder="1">
                                </div>
                                <div class="boton">
                                    <div class=" boton-producto ">
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

          
                <div class="container productos">
                    <x-slice-cart-producto :data="$recomendaciones"  />
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
    
       
      

        
       
      
      

    </style>
     
@endsection        