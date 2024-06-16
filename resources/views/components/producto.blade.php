@props([
    'producto',
])

<div class="card" style="width: 80%; margin: auto;">
    <a href="{{route('producto.show', ['id' => $producto->id])}}">
    <div class="img">
        <img width="100%" height="100%" class="img" src="{{ asset('storage/' . $producto->inmagen_default)}}" alt="{{ asset('storage/' . $producto->inmagen_default)}}">
    </div>
    </a>
    <div class="card-body">
     
            <div class="container descripcion" style="height: 50px">
                <h5  style="font-size: 14px;" class="card-title">{{$producto->nombre}}</h5>
            </div>
   
        
        <div class="container row">
            <div class="col-md-6" style=" display: flex; justify-content: center; align-items: center;">
                <a href=""class="btn btn-success" style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                      </svg>
                </a>
            </div>
            <div class="col-md-6" style=" display: flex; justify-content: center; align-items: center;fon">
                ${{$producto->precio}}        
            </div>
        </div>
      
     
    </div>

    <style>
        .img{
            border-radius: 5px 5px 0 0 ;
        }
        .card {
            width: 100px;
            height: 300px;         
        }
        .descripcion{
            font-size: 16px;
        }
        .img img{
            width: 100%;
        }
        .img {
            height: 190px;
            width: 100%;
            background: black;
        }
    </style>
  </div>