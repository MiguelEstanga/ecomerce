@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container row">
           
            <div class="col-md-12 cliente_data">
                <table class="table">
                    <tbody>
                        <thead>
                         
                             <td>Producto</td>
                             <td>Precio</td>
                             <td>Descripcion</td>
                             <td>Cantidad</td>
                          
                        </thead>
                        <tbody>
                            @foreach($HistorialCompra as $item)
                              <tr>
                                  <td>{{ $item->producto->nombre }}</td>
                                  <td>{{ $item->producto->precio }}</td>
                                  <td>{{ $item->producto->descripcion }}</td>
                                    <td>Crear campos</td>
                              </tr>
                            @endforeach
                        </tbody>
                    </tbody>
                    
                </table>
                <div class="alert {{$Tranferencia->estado->id == 1 ? 'alert-success' : 'alert-warning'}}">
                    Estado {{$Tranferencia->estado->estado}}
                </div>
                <div class="container"> 
                    <h2 class="alert" >Comentario:</h2>
                    @if($Tranferencia->Comentario != null)
                        {{$Tranferencia->Comentario}}
                    @endif
                    @php
                        use App\Helper\Retiro;
                        $retiro = Retiro::getRetiro($Tranferencia->id_epresas_de_envio_y_retiro);
                        $sucursal = Retiro::getSucursal($Tranferencia->id_sucursal);
                     @endphp
                    <table class="table">
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
                <div class="container">
                    <form action="{{ route('admin.editar_orden_estan', $Tranferencia->id) }}" method="POST">
                        @csrf
                            <div class="container row">
                                <label for="inputPassword6" class="col-form-label">Modificar Agencia de envio</label>
                                <select name="cambiar_empresa_de_envio" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                                   <option value="1">si</option>
                                   <option selected value="0">no</option>
                                </select>
                               
                            </div>
                            <div class="container row">
                                <x-empresa_de_envio/>
                            </div>
                            <div class="container ">
                                <label for="inputPassword6" class="col-form-label">Estado</label>
                                <select name="estado" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                                    @foreach($Estado as $item)
                                        <option 
                                            {{$item->id == $Tranferencia->id_estado ? 'selected' : ''}}
                                             value="{{$item->id}}"
                                        >{{$item->estado}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="container">
                                <label for="inputPassword6" class="col-form-label">Comentarios del admin</label>
                                <textarea name="comentario" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline"></textarea>
                            </div>
                            <div class="container">
                                <button class="btn btn-primary" type="submit">
                                    Actualizar Estado
                                </button>
                            </div>
                    </form>
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