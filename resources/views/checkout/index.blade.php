@extends('layouts.app')

@section('content')
    @php
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
                        <p>Total: {{ $total }}</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="alert">
        Formas de pagos
    </div>
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
                  Accordion Item #2
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Accordion Item #3
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
              </div>
            </div>
          </div>
    </div>
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