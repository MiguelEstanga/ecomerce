<div>
    <ul class="container">
        <li>
            <a href="">
               Ordenes
            </a>
           
        </li>
        
        <li>
           <a href="">
               Mis datos
           </a>
        </li>
        <li>
            <a href="">
                Ordenes Completada
            </a>
         </li>
         <li>
            <a href="{{route('user.ordenes_pagas')}}">
                Mis ordenes pagadas
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