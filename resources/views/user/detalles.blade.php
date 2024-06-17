@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container row">
            @if(session()->has('mensage'))
                <div class="alert alert-success">
                    {{session()->get('mensage')}}
                </div>
            @endif
            <div class="col-md-12 cliente_data">
                <table class="table">
                    <tbody>
                        <thead>
                         
                             <td>Producto</td>
                             <td>Precio</td>
                             <td>Descripcion</td>
                             <td>Cantidad</td>
                            <td>Total</td>
                        </thead>
                        <tbody>
                            @foreach($HistorialCompra as $item)
                              <tr>
                                  <td>{{ $item->producto->nombre }}</td>
                                  <td>{{ $item->producto->precio }}</td>
                                  <td>{{ $item->producto->descripcion }}</td>
                                  <td> {{ $item->cantidad }}</td>
                                    <td>
                                        {{  
                                            $item->producto->precio * $item->cantidad
                                        }}
                                    </td>
                              </tr>
                            @endforeach
                        </tbody>
                    </tbody>
                    
                </table>
                <div class="aler ">
                   <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Estado</td>
                                <td>{{$Tranferencia->estado->estado}}</td>
                                @if($Tranferencia->estado->id == 4)
                                <td>
                                    <form action="{{ route('retirado') }}" method="POST">
                                        @csrf
                                        <input type="text"  name="id" hidden value="{{$Tranferencia->id}}">
                                        <button class="btn btn-primary">
                                            Calificar como retirado 
                                        </button>
                                    </form>    
                                </td> 
                                @endif
                            </tr>
                        </tbody>
                   </table>
                </div>
                <div class="container">
                    <h2 class="alert">
                        Comentarios del admin:
                    </h2>
                    @if($Tranferencia->Comentario != null)
                        <div class=" container ">
                            {{$Tranferencia->Comentario}}
                        </div>
                      
                    @endif
                    <div class="container">
                        <h2 class="alert alert-warning">
                            En caso de que la sucursal no se encuentr disponible se le hara saber en el comentario y en la modificacion donde retirara el producto,
                            de la misma forma se le notificara si el retiro es gratis o con pago a destinatario.
                        </h2>
                        @php
                            use App\Helper\Retiro;
                            $retiro = Retiro::getRetiro($Tranferencia->id_epresas_de_envio_y_retiro);
                            $sucursal = Retiro::getSucursal($Tranferencia->id_sucursal);
                        @endphp
                        <table class="table table-bordered">
                            <thead>
                                <td>Retiro por</td>
                                <td>Sucursal</td>
                            </thead>
                            <tbody>
                                <td>{{$retiro->nombre}}</td>
                                <td>{{$sucursal->direccion}}</td>
                            </tbody>
                        </table>
                    </div>
                    
                  
                </div>
            </div>
        </div>
    </div>
    <style>
        .container{
            margin-top:20px;
            gap: 10px;
        }
       

        .cliente_data{
            border:solid 1px #fff;
            background: rgba( 255, 255, 255, 0.8 );
        }
    </style>
@endsection