@props(
    [
        'producto' => []
    ]
)
<div class="container_cart" 
    style="background-img: url('https://http2.mlstatic.com/D_NQ_618809-MLA76529797142_052024-OO.webp ');"
>
    <div  class="producto">
       
      
    </div>

    <div class="precio">
        <div class="data">   
            {{$producto->precio}}$
        </div>
        <div class="btn_comprar">
            <a class="btn btn-success" href="">Comprar</a>
        </div>
    </div>
</div>

<style>
.container_cart{
    border-radius:10px!important;
   background-image: url({{ asset('storage/' . $producto->inmagen_default)}});
   background-position: center;
   background-size: cover;
   display: flex;
   width: 90%;
   height: 90%;
   
   grid-auto-columns: 40% 40%;
}

.producto{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
}
.producto .img_{
    width: 400px;
    height: 300px;
  
}
.precio{
    width: 100%;
    display: flex;  
    justify-content: center ;
    align-items: center;
    gap: 20px;
    
}

.precio .data{
    
    font-size: 50px;
    padding: 10px  50px;
    border-radius: 10px;
    color: #000;
    background-image:  linear-gradient(   #d4ac0d  ,  #d4ac0d  ) ;
}
</style>