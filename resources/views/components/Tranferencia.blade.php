@props([
    'total' => 0
])
@php
  use App\Models\Dolar;
  $dolar = Dolar::first();
@endphp
<div class="container tranferencia">
    <form action="{{ route('tranferencia.index') }}" method="post">
          @csrf
          
          <div class="alert alert-success" role="alert">
            Precio del dolar: {{ $dolar->precio }}
          </div>
          <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="formGroupExampleInput" class="form-label">Numero de referencia </label>
                    <input required name="referencia" type="text" class="form-control" id="formGroupExampleInput" placeholder="#12345678">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="formGroupExampleInput2" class="form-label">Telefono</label>
                    <input type="text" name="numero_telefono" required class="form-control" id="formGroupExampleInput2" placeholder="+58 999 999 999">
                </div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
                <label for="formGroupExampleInput2" class="form-label">Fecha de la transaccion</label>
                <input required name="fecha" type="date" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
              </div>
              <div class="mb-3 col-md-6">
                <label for="formGroupExampleInput2" class="form-label">Banco originario</label>
                <input required name="banco" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Banco">
              </div>
          </div>
          <div class="row">
              <div class="mb-3 col-md-6">
                <label for="formGroupExampleInput2" class="form-label">Monto cancelado Bs</label>
                <input name="monto" value="{{$total * $dolar->precio }}" required type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
              </div>
              <div class="mb-3 col-md-6">
                <label for="formGroupExampleInput2" class="form-label">Email</label>
                <input type="text" required name="email" @auth
                    value="{{ Auth::user()->email }}"
                @endauth class="form-control" id="formGroupExampleInput2" placeholder="Email@example.com">
              </div>
          </div>
          <button class="btn btn-success" >Pagar</button>
          
    </form>
</div>

<style>
    .tranferencia{
        padding: 20px;

    }
  
</style>