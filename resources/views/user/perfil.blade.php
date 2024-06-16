@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container row">
            <div class="col-md-3 menu_cliente">
                <x-menu-user />
            </div>
            <div class="col-md-8 cliente_data">
                <table class="table">
                    <tbody>
                        <thead>
                            <td>Fecha</td>
                            <td>Estado</td>
                            <td>Monto</td>
                            <td>Tipo de pago</td>
                            <td>Ver</td>
                        </thead>
                        <tbody>
                            @foreach($OrdenesDePagos as $OrdenesDePago)
                                <tr>
                                    <td>{{ $OrdenesDePago->fecha }}</td>
                                    <td>{{$OrdenesDePago->id_estado}}</td>
                                    <td>
                                        @php
                                            $monto = 0;
                                            foreach( $OrdenesDePago->HistorialCompra as $item){
                                                $monto =$monto + $item->producto->precio;
                                            }
                                        @endphp
                                     
                                        {{ $monto }}
                                    </td>
                                    <td></td>
                                    <td>
                                        <a href="{{ route('user.detalle', $OrdenesDePago->id) }}">Ver</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
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
           background: rgba( 255, 255, 255, 0.8 );
        }

        .cliente_data{
            border:solid 1px #ccc;
            background: rgba( 255, 255, 255, 0.8 );
        }
    </style>
@endsection