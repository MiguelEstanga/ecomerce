<div>
    <ul class="container">
        <li class=" link {{ Route::is('user.ordenes_pagas') ? 'active' : '' }}">
            <a href="{{route('user.ordenes_pagas')}}">
                Datos 
            </a>
        </li>
        <li>
            <a href="{{route('user.productos')}}">
               Compras
            </a>
        </li>
        <li>
            <a href="">
                Favoritos 
            </a>
        </li>
        <li>
            <a href="">
                Ordenes 
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
        width: 100px;
        display: flex;
        justify-content: start;
        align-items: flex-start;
        padding: 10px;
    }
    ul li:hover{
        background-color: #eee;
        background-color:  #148f77 ;
    }

    ul .link.active{
        background-color:  #148f77 ;
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