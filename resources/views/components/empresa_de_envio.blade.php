@php
    use App\Models\EpresasDeEnvioYRetiro;
    $empresa_de_envio = EpresasDeEnvioYRetiro::all();
@endphp
@if(count($empresa_de_envio) > 0)
    <div class="container row">
        <div class="mb-3 col-md-6">
            <label for="formGroupExampleInput2" class="form-label">Empresa de envio</label>
            <select name="empresa_de_envio" id="empresa_de_envio" class="form-select" id="formGroupExampleInput2">
                <option value="">
                    Seleccione una empresa
                </option>
                @foreach($empresa_de_envio as $empresa)
                    <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                @endforeach
            </select>
          </div>
          <div class="mb-3 col-md-6">
            <label for="formGroupExampleInput2" class="form-label">Sucursal</label>
            <select name="sucursal" id="sucursal" class="form-select">

            </select>
          </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var empresa_de_envio = document.getElementById('empresa_de_envio');
            var sucursal = document.getElementById('sucursal');
            empresa_de_envio.addEventListener('change', function () {
                console.log(empresa_de_envio.value);
                let url = '{{route('sucursal', "x")}}';
                url = url.replace('x', empresa_de_envio.value);
                fetch(url)
                .then(response => response.json())
                .then(data => {
                    sucursal.innerHTML = '';
                    for(let i = 0; i < data.length; i++)
                    {
                        let option = document.createElement('option');
                        option.value = data[i].id;
                        option.text = data[i].direccion;
                        sucursal.appendChild(option);
                    }
                });
                console.log(url);
            } );
        });
    </script>
@endif
