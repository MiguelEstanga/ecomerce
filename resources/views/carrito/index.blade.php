@extends('layouts.app')

@section('content')

            
        
    <div class="container carrito_container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Producto</th>
                    
                    <th scope="col" >Imagen</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Total</th>
                    <th scope="col" > Agrgar </th>
                    <th scope="col" >Remover</th>
                </tr>
            </thead>
            <tbody id="carrito">
                @php
                    $total = 0;   
                @endphp
                @for( $i = 0; $i < count($carrito); $i++)
                    @php
                        $total += $carrito[$i]->cantidad * $carrito[$i]->producto->precio;
                    @endphp
                    <tr>
                        <td>
                            {{$carrito[$i]->producto->nombre}}
                        </td>
                        
                        <td>
                            <img  width="100px" height="100px" src="{{ asset('storage/'.$carrito[$i]->producto->inmagen_default) }}" alt="producto"/>
                            
                        </td>
                        <td>{{ $carrito[$i]->producto->precio }}</td>
                        <td>{{ $carrito[$i]->cantidad * $carrito[$i]->producto->precio }}</td>
                        <form action="{{route('carrito.aculizar_cantidad')}}" method="POST">
                            @csrf
                            <td>
                                <input
                                    style="width: 200px;"  
                                    class="form-control" type="number" id="cantidad" name="carrito_cantidad" value="{{ $carrito[$i]->cantidad }}" >
                            </td>
                            <td>
                                    <input type="text" name="carrito_id" value="{{ $carrito[$i]->id }}" hidden>
                                    <button type="submit" class="btn btn-success">Agregar</button>                               
                            </td>
                            
                               
                        </form>
                            <td>
                                <form action="{{route('carrito.eliminar_carrito' )}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="text" name="carrito_id" value="{{ $carrito[$i]->id }}" hidden>
                                    
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        
                    </tr>
                @endfor
                
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6">Total</td>
                    <td id="carrito_total">{{ $total }}</td>
                </tr>
                <tr>
                    <td colspan="6"></td>
                    <td id="carrito_total"><a class="btn btn-success" href="{{route('carrito.checkout')}}">Pagar</a></td>
                </tr>
            </tfoot>
        </table>
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
        .carrito_container{
            margin-top: 30px;
        }
        table tr td{
           
        }
    </style>
     
@endsection        