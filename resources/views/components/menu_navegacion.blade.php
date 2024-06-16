<div class="container">
    <a class="navbar-brand" href="{{route('landing')}}">Ecomerce</a>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          @php
            use App\Models\carrito;
            $carrito = [];
            if (Auth::check()) {
                $carrito = Auth::user()->cart->count();
            }else{
              $carrito = carrito::where('session' , session()->getId())->count();
            }   
          @endphp
          <li class="nav-item carrito">
            <div class="notificacion">{{$carrito}}</div>
            <a class="nav-link" href="{{route('carrito.index')}}">Carrito</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Categorias</a>
          </li>
        </ul>
        <div class="buscador container">
            <form class="d-flex" style="width:60%" role="search">
              <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
          </div>
        
          @guest
            <a href="{{route('login')}}">Login</a>   
          @endguest
          @auth
             
        
              <div class="menu_auth"> 
                <a href="{{route('user.index' , Auth::user()->id  )}}" >{{ Auth::user()->name }}</a>
                
                <div>
                  notificaciones
                </div>
                <a href="{{route('logout')}}">Cerrar Sesión</a>
                @can('admin')
                  <a href="{{route('admin.show')}}">
                    Panel administrador
                  </a>
                @endcan
               
              </div>
             

          @endauth
    
      </div>
      <style>
        .menu_auth{
            display: flex;
            gap: 10px;
          
            min-width:400px;
        }

        .menu_auth a{
            text-decoration: none;
            color: black;
            font-size: 12px;
            padding: 4px;
            cursor: pointer;
        }
        li{
         
          position: relative;
        }
        .nav-item .carrito{
           position: relative;
           border:solid 1px #000;
        }
        .notificacion{
            position: absolute;
            top: 0;
            left: -8px;
            width: 20px;
            height: 20px;
            background-color: red;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 20px;
            font-weight: bold;
            font-size: 12px;
            padding: 4px;
        }
        .buscador {
         
           display: flex;
           justify-content: center;
           align-items: center;
        }
      </style>
</div>