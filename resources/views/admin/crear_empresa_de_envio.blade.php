@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container row">
            <div class="col-md-3 menu_admin">
                <x-menu-admin />
            </div>
            <div class="col-md-8 data_admin container">
                <div class="formulario_sucurlas  row" style="height: auto!important;">
                    @if(session()->has('mensaje'))
                        <div class="alert alert-success">
                            {{session('mensaje')}}
                        </div>
                    @endif
                    <form action="{{route('admin.store_empresa_de_envio')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row container-fluid entris"  >
                            <div class="col-md-6">
                                <label for="nombre">Nombre de la empresa </label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="row container-fluid entris">
                            <div class="col-md-6">
                                <label for="nombre">Logo de la empresa </label>
                            </div>
                            <div class="col-md-6">
                                <input type="file" class="form-control" id="nombre" name="logo" placeholder="logo">
                            </div>
                        </div>
                       
                        
                       
                        <div class="constainer" style="margin-top: 20px;">
                            <button class="btn btn-success" type="submit">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>    
       document.addEventListener('DOMContentLoaded', function(){
            var sucursal = document.getElementById("sucursal");
            var nuevo    = document.getElementById("btn-sucursal");

            nuevo.addEventListener('click' , function(){
                console.log(sucursal.children.length);
                sucursal.innerHTML += `
                            <div class="container-fluid row">
                                <div class="col-md-6">
                                    <label for="nombre">Sucursal ${sucursal.children.length +1}</label>
                                </div>
                           
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="sucursal" name="sucursal[]" placeholder="sucursal">
                                </div>
                            </div>
                `
            });
        });
    </script>
    <style>
       .formulario_sucurlas{
       
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
       }
       .entris{
            
            display: flex;
            align-items: flex-end;
            padding: 10px;
            margin-top: 10px;
            border-bottom:solid .5px rgba(0 , 0, 0 ,.1);
            height:70px;
            padding-bottom: 10px;
           
       }
    </style>
@endsection