@extends('layouts.app')

@section('content')
    @php
     use App\Models\CacheEmpresaDeEnvioYRetiro;
     $empresa_de_envio = CacheEmpresaDeEnvioYRetiro::where('id_user' , Auth::user()->id)->first();
     $total = 0;   
    @endphp
    <div class="container">
        <div class="container container_factura row">
            <div class=" factura">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Producto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Total</th>
                           
                        </tr>
                    </thead>
                    <tbody id="carrito">
                       
                        @for( $i = 0; $i < count($carrito); $i++)
                            @php
                                $total += $carrito[$i]->cantidad * $carrito[$i]->producto->precio;
                            @endphp
                            <tr>
                                <td>{{ $carrito[$i]->producto->nombre }}</td>
                                <td>{{ $carrito[$i]->cantidad }}</td>
                                <td>{{ $carrito[$i]->producto->precio }}</td>
                                <td>{{ $carrito[$i]->cantidad * $carrito[$i]->producto->precio }}</td>
                            </tr>
                        @endfor
                        
                    </tbody>
                  
                </table>
                <div class="container">
                    <div class="alert alert-success" role="alert">
                        <p>Total: {{ $total }}$</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
   
    <div class="container" style="margin-top: 40px">
        <form action="{{route('empres_de_envio_sucursal')}}" method="post">
            @csrf
            <x-empresa_de_envio/>
            <div class="container">
                <button style="width: 100%" class="btn btn-success" type="submit">seleccionar</button>
            </div>
        </form>
    </div>

    @if(  $empresa_de_envio != null)
        <div class="container" style="margin-top: 50px">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Tranferencia bancaria
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    
                        <x-Tranferencia :total="$total"/>
                    
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Paypal
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    @php
                    $baseUrl = route('paypal.pago');
                    @endphp
                    <h2 class="alert alert-info">
                        Importante antes de pagar, debes seleccionar la empresa de envio y la sucursal.
                    </h2>
                
                <!-- Para cambiar al entorno de producción usar: https://www.paypal.com/cgi-bin/webscr -->
                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="form_pay">
                
                    <!-- Valores requeridos -->
                    <input type="hidden" name="business" value="vendedor@business.example.com">
                    <input type="hidden" name="cmd" value="_xclick">
                
                
                    <input type="hidden" name="item_name" id="" hidden value="ecomerce Daniela" required=""><br>
                
                    
                    <input type="hidden" hidden name="amount" id="" value="{{$total}}" required=""><br>
                
                    <input type="hidden" name="currency_code" value="EUR">
                
            
                    <input type="hidden" name="quantity" id="" value="1" required=""><br>
                
                    <!-- Valores opcionales -->
                    <!-- En el siguiente enlace puedes encontrar una lista completa de Variables HTML para pagos estándar de PayPal. -->
                    <!-- https://developer.paypal.com/docs/paypal-payments-standard/integration-guide/Appx-websitestandard-htmlvariables/ -->
                
                    <input type="hidden" name="item_number" value="1">
                    <!-- <input type="hidden" name="invoice" value="0012"> -->
                    <!--qeadzcvf21 pw paypal -->
                    <input type="hidden" name="lc" value="es_ES">
                    <input type="hidden" name="no_shipping" value="1">
                    <input type="hidden" name="image_url" value="https://picsum.photos/150/150">
                    <input type="hidden" name="return" value="{{route('paypal.pago')}}">
                    <input type="hidden" name="cancel_return" value="<?= $baseUrl ?>/pago_cancelado.php">
                
                    
                
                    <button  type="submit">Pagar ahora con Paypal!</button>
                
                </form>
                
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Mercantil
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                </div>
                </div>
            </div>
        </div>         
    @endif

   
  
    <style>
        
        .container_factura{
            margin-top:20px;
            gap: 10px;
        }
        .conatiner-forma-pago{
         
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            justify-content: center;    
            align-items: center;
        }
        .conatiner-forma-pago button{
            width: 180px;
        }
       
        .factura{
           background: rgba( 0, 0, 0, 0.1);
           padding: 20px;
           border-radius: 10px;
           transition: all 0.3s ease-in-out;
        }

        .factura:hover{
            background: rgba(  34, 153, 84 , .5);
        }

        
       
    </style>
@endsection