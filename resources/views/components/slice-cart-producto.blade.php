@props([
    'data' => [],
    
])
<div class="container row">
   <div class="col-md-6">
      <h2 class="categoria-titulo">
        Nombre de la categoria
      </h2>
   </div>
   <div class="col-md-6 ver_todos" style="text-align: left;">
      <a >ver todos</a>
   </div>

</div>
<div class="productos-container">
    @foreach($data as $producto)
        <a class="productos-item" href="{{route('producto.show', ['id' => $producto->id])}}">
           
                <div class="img">
                    <img width="100%" height="100%" src="{{asset('storage/'. $producto->inmagen_default)}}" alt="">
                </div>
                <div class="descripcion">
                   {{ $producto->nombre }}
                </div>
                <div class="precio">
                    {{ $producto->precio }}$
                </div>
            
        </a>
       
    @endforeach
   
</div>
<style>
   .categoria-titulo{
    
      font-size: 20px;
      font-weight: 400;
   }
   .ver_todos{
    
      display: flex;
      justify-content:end;
      align-items: center;
      height: 20px;
     
   }
 .productos-container  {
 
    width: 100%;
    height: 100%;
    padding: 10px;
    gap: 1px;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    justify-content:center;
    align-items: center;
    overflow: hidden;
    overflow-x: scroll;
    
    
 }
 .productos-container::-webkit-scrollbar {
  width: 2px;               /* width of the entire scrollbar */
  height: 3px;
}
.productos-container::-webkit-scrollbar-track {
  background: #f2f2f2;        /* colo   r of the tracking area */
  height: 2px;
  border-radius: 20px;
}

.productos-container::-webkit-scrollbar-thumb {
  background-color: #ccc;    /* color of the scroll thumb */
  border-radius: 20px;       /* roundness of the scroll thumb */
    /* creates padding around scroll thumb */
    height: 2px;
  height: 5px;

}


 .productos-item{
    text-decoration: none;
    color: black;
    width: 260px;
    height:100%;
    display: grid;
    grid-auto-rows: 70% 20% 10%;
    transition: all 0.5s;
    
    cursor: pointer;
 }

 .productos-item:hover{
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
    text-decoration: underline;
 }

 .productos-item .img{
    background: black;
 }

 .productos-item .descripcion{
  
    font-size: 13px;
    padding: 10px;
    text-align: center;
    break-word: break-all;

 }
 .productos-item .precio{
   height: 100%;
   font-size: 24px;
   font-weight: 400;
 }
</style>