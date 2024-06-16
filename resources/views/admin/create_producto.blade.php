@extends('layouts.app')

@section('content')
    <div class="container" style="height: auto!important;">
        <div class="container row">
            <div class="col-md-3 menu_cliente">
                <x-menu-admin />
            </div>
            <div class="col-md-8 col-sm-6 cliente_data" style="height: auto!important;">
                @if(session()->has('mensaje'))
                    <h2 class="alert alert-success" style="margin-top: 20px;">
                        {{ session()->get('mensaje') }}
                    </h2>
                @endif
               
                <div class="row">
                    <form action="{{route('admin.store_producto')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <label  class="form-label"> Stop </label>
                                <input type="number" class="form-control" name="Stop" placeholder="Stop" value="{{ old('stop') }}" >
                            </div>    
                            
                            <div class="col-md-6">
                                <label  class="form-label">Imagen principal</label>
                                <input type="file" class="form-control" name="imagen" placeholder="Imagen" value="{{ old('imagen') }}">
                            </div>    
                        </div>
                        <div class="separador"></div>
                        <div class="row">
                            <div class="col-md-6 mb3">
                                <label  class="form-label">Precio</label>
                                <input type="number" class="form-control" name="precio" placeholder="Precio" value="{{ old('Precio') }}">
                            </div>   
                            <div class="col-md-6 mb3">
                                <label  class="form-label">Categoria</label>
                                <select class="form-control" name="categoria" id="">
                                   @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                   @endforeach
                                </select>
                            </div>   
                        </div>
                        <div class="separador"></div>
                        <div class="row">
                            <div class="col-md-4 mb3">
                                <label  class="form-label">Descuento</label>
                                <select class="form-control" name="descuento" id="descuento">
                                    <option selected value="0">Sin descuento</option>
                                    <option value="1">Con descuento</option>
                                </select>
                            </div>   
                            <div class="col-md-4">
                                <label  class="form-label"> Descueneto % </label>
                                <input disabled type="number" class="form-control" name="descuento_monto" placeholder="Descueneto" value="{{ old('descuento_monto') }}" id="descuento_monto">
                            </div>   
                            <div class="col-md-4 mb3">
                                <label  class="form-label">Tiempo del descuento</label>
                                <input  disabled type="number" class="form-control" name="tiempo_descuento" placeholder="Tiempo del descuento " value="{{ old('tiempo_descuento') }}" id="tiempo_descuento">

                            </div>  
                        </div>
                        <div class="separador"></div>
                        <div class="row">
                            <div class="col-md-12  mb3">
                                
                                <label  class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
                            </div>   
                            
                        </div>
                        <div class="separador"></div>
                    </div>

                    <div class="container">
                        <h2>Agregar Empresa de en envio y retiro</h2>
                        <div class="mas_empresa_de_envio">

                        </div>
                        
                        <div class="container">
                            <button class="btn btn-primary" type="button" id="agregar_empresa_de_envio">
                                Agregar Empresa de envio
                            </button>
                        </div>
                    </div>
                    <div class="separador"></div>
                    <div class="container">
                        <h2>Agregar Descripción</h2>
                        <div class="mas_descripcion_productos" >
                           
                            
                        </div>

                           
                            <div id="warnig" class="container " style="margin: 10px 0;"></div>

                        <div class="container">
                            <button class="btn btn-primary" type="button" id="agregar_descripcion">
                                Agregar Descripción
                            </button>
                        </div>
                    </div>
                    <div class="separador"></div>
                    <div class="container">
                        <h2>Agregar mas imagen</h2>
                        <div class="imagenes_productos" >
                           
                            
                        </div>
                        <div id="warnig" class="container " style="margin: 10px 0;"></div>
                        <div class="container">
                            <button class="btn btn-primary" type="button" id="agregar_imagen">
                                Agregar imagen
                            </button>
                        </div>
                    </div>
                    <div class="separador"></div>
                </div>
                <div class="container">
                    <button class="btn btn-primary" type="submit"> Guardar </button>
                </div>
            </form>
            </div>
        </div>
    </div>
    
    <style>
        .separador{
            border-bottom: 1px solid #eee;
            width: 100%;
            margin:20px 0;
        }
        .container{
            height: auto!important;
            margin-top:20px;
           
        }
        .menu_cliente {
          
        }
        .imput_imagen{
            width:500px!important;
            
        }
        .container_imagenes{
            display: flex;
           
            align-items: center;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const imagenes = document.querySelector('.imagenes_productos'); // Assuming there's only one container
        const _imagenes = document.querySelector('.imagenes_'); // Assuming there's only one container
        const agregarImagen = document.querySelector('#agregar_imagen'); // Assuming a class for the button
        const empresa_de_envio = document.querySelector('#empresa_de_envio');
        var select_sucursal = document.querySelector(  '#sucursal');
        
        const btn_descripcion = document.querySelector('#agregar_descripcion');
        const container_descripcion = document.querySelector('.mas_descripcion_productos');

        const btn_agregar_empresa_de_envio = document.querySelector('#agregar_empresa_de_envio');
        const container_empresa_de_envio = document.querySelector('.mas_empresa_de_envio');

        const descuento = document.querySelector('#descuento');
        const descuento_monto = document.querySelector('#descuento_monto');
  function addEmpresaDeEnvio( ) 
  {
    btn_agregar_empresa_de_envio.addEventListener('click', function (event){
        container_empresa_de_envio.innerHTML += `
                <div class="container">
                    <select class="form-control" name="empresa_de_envio[]" id="empresa_de_envio">
                                    @foreach($empresa_de_envio as $empresa)
                                        <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                                    @endforeach
                    </select>
                </div>    
        `
    })
  }
    

  function addImage( event  , container , inputType , name , limite = 3) {

    event.addEventListener('click', function (event) {
      if(container.children.length <=  limite)
      {
        const imageContainer = document.createElement('div');
        imageContainer.classList.add('container'); // Add container class

        // Create label element
        const label = document.createElement('label');
        label.classList.add('form-label');
        label.textContent = `Imagen ${ container.children.length + 1 }`;
        imageContainer.appendChild(label);
        imageContainer.classList.add('container_imagenes');
        // Create file input element
        const fileInput = document.createElement('input');

        const btn = document.createElement('button');
        btn.textContent = 'X';
        btn.classList.add('btn', 'btn-danger' , 'btn-remover-imagen') ;
        btn.id = container.children.length ;
        fileInput.classList.add('form-control', 'imput_imagen');
        fileInput.id = `imagen__${container.children.length + 1}`;
        fileInput.type = inputType;
        fileInput.name = name;
        
        imageContainer.appendChild(fileInput);
        imageContainer.appendChild(btn);
        // Add the new container to the imagenes element
        container.appendChild(imageContainer);
      }else{
        warnig.innerHTML = "  <h2 class='alert alert-danger' >No puedes agregar mas de 4 imagenes </h2>"
      
      }
      
    });
  }

  function _descuento()
  {
    descuento.addEventListener('change', function (event) {
        console.log(event.target.value);
        if(event.target.value == 1) 
        {
           descuento_monto.disabled = false;
           tiempo_descuento.disabled = false;
        }else{
            descuento_monto.disabled = true;
            tiempo_descuento.disabled = true;
        }
    })
  }
  addImage(agregarImagen , imagenes , 'file', 'imagenes[]' , 3);
  addImage(btn_descripcion , container_descripcion , 'text', 'descripcion[]' ,7); // Call the function to initialize the event listener
  addEmpresaDeEnvio();
  _descuento();
});
    </script>
@endsection