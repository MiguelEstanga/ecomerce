<div>
    <ul class="container">
        <li>
            <a href="">
                Clientes
            </a>
        </li>
        <li class="{{ Route::is('admin.dolar') ? 'active' : '' }}">
            <a href="{{ Route('admin.dolar') }}">
              Fijar precio del dolar en bs
            </a>
        </li>
        
        <li class="{{ Route::is('admin.create_categoria') ? 'active' : '' }}">
            <a href="{{route('admin.create_categoria')}}">
                Categorias
            </a>
        </li>
      
        <li>
            <a href="">
               Ver administradores
            </a>
        </li>
        <li  class="{{ Route::is('admin.create_empresa_de_envio') ? 'active' : '' }}">
            <a href="{{route('admin.create_empresa_de_envio')}}">
                Crear empresa de envio
            </a>
        </li>
        <li class="{{ Route::is('admin.empresa_de_envio') ? 'active' : '' }}">
            <a href="{{route('admin.empresa_de_envio' , 'x')}}">
               Empresas de envio
            </a>
        </li>
        <li class="{{ Route::is('admin.create_producto') ? 'active' : '' }}">   
            <a   href="{{ route('admin.create_producto') }}">
                Crear productos
            </a>
        </li>
        <li class="{{ Route::is('admin.crear_producto') ? 'active' : '' }}">
            <a href="{{ route('admin.create_producto') }}">
              Productos
            </a>
        </li>
        <li class="{{ Route::is('admin.ordenes_no_pagas') ? 'active' : '' }}">
            <a href="{{ route('admin.ordenes_no_pagas') }}">
               Ordenes no pagas  
            </a>
        </li>
        <li class="{{ Route::is('admin.ordenes_pagas') ? 'active' : '' }}">
            <a href="{{ Route('admin.ordenes_pagas') }}">
               Ordenes pagas 
            </a>
        </li>
        
       
        <li>
            <a href="">
               Reporte de ventas
            </a>
        </li>

    </ul>
</div>
<style>
    .container{
        gap: 10px;
    }
    ul li{
        list-style: none;
        margin: 10px 0;
        width: auto;
        display: flex;
        justify-content: start;
        align-items: flex-start;
        padding: 10px;
    }
    ul li:hover{
        background-color: #eee;
        background-color:  #148f77 ;
    }
    ul li.active{
        background-color: #eee;
        background-color: #148f77 ;
    }

    ul li.active a{
        color: white;
    }
    ul li:hover a{
        color: white;
    }
    ul li a{
        text-decoration: none;
        text-align: left;
        color: black;
    }
</style>