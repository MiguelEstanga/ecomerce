@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container row">
            <div class="col-md-2 menu_cliente">
                <x-menu-cliente />
            </div>
            <div class="col-md-7 cliente_data">

            </div>
        </div>
    </div>
    <style>
        .container{
            margin-top:20px;
            gap: 10px;
        }
        .menu_cliente {
           border:solid 1px #ccc;
        }

        .cliente_data{
            border:solid 1px #ccc;
        }
    </style>
@endsection