@extends('layouts.app')

@section('content')
    <div class="swiper_content">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              @foreach($mas_vendido as $producto)
                <div class="swiper-slide">
            
                  <x-producto_cart_mas_vendidos  :producto="$producto" />
              
        
                </div>
              @endforeach
           
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
          </div>
         
    </div>
    <div class="container categoria-main">
        @foreach ($categorias as $categoria)
            <a class="categoria" href="{{route('producto.buscar', $categoria->id)}}">
              {{$categoria->nombre}}
            </a> 
        @endforeach   


    </div>
    <div class="container main-container">
            @foreach ($productos as $producto)
              <x-producto  :producto="$producto" />
            @endforeach
           
         
    </div>
   <div class="container pagination">
    {{$productos->links()}}
   </div>
    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

    <style> 
        body{
         
        }
        .categoria-main{
        
          z-index: 0;
          border-radius: 10px;
          padding: 20px;
          margin: 20px 0;
          display: flex;
          gap: 20px;
         
        
        }
        .categoria-main .categoria{
          z-index: 1000;
          text-decoration: none;
          transition: all 0.3s ease;
          padding: 10px;
          background: #1363DF;
          border-radius: 10px;
          color: white;
          
       
        }
        .categoria-main .categoria:hover{
        
          text-decoration: none;
          transform: scale(1.2);
          padding: 10px;
          background: #1363DF;
          border-radius: 10px;
          color: white;
          box-shadow: box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 1);
          -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 1);
          -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 1);
       
        }
        .main-container {
            gap: 20px;
            background:  #fdfefe ;
            padding:10px 0; 
            border-radius: 10px;
            display: grid;
            place-content: center;  
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            justify-content: center;
            align-items: center;
        }
        .swiper_content {
          width: 100%;
          height: 100%;
          display: flex;
          justify-content: center;
          align-items: center;
          
          margin: 50px auto;
          height: 400px;
        }
        .swiper {
          width: 100%;
          height: 100%;
        }
    
        .swiper-slide {
          text-align: center;
          font-size: 18px;
          background: #fff;
          display: flex;
          justify-content: center;
          align-items: center;
        }
    
        .swiper-slide img {
          display: block;
          width: 100%;
          height: 100%;
          object-fit: cover;
        }
        .pagination{
          display: flex;
          justify-content: center;
          align-items: center;
          gap: 20px;
          margin-top:20px;
          height: 50px;
         
        }
    </style>
       
@endsection