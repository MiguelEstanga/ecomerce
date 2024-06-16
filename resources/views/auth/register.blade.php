<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="conatiner">
        <div class="container_formulario">
            
            
            <div class="formularios">
                <form action="{{ route('registro.post') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
                        <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Nombre de usuario para poder acceder a la aplicación</div>
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email </label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">Email de usuario para poder acceder a la aplicación</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Repetir contraseña</label>
                        <input " name="passworsd_confirmation" class="form-control" id="exampleInputPassword1">
                      </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="row">
                        
                        <button class="col-md-12 btn btn-success"  href="{{ route('register') }}">
                            Registrar
                        </button>
                    </div>
                   
                  </form>
            </div>
          
        </div>
    </div>
</body>
<style>
    body{
        margin: 0;
        padding: 0;
    }
    .container_formulario{
        width: 400px;
        height: 600px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 0 10px #000;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .formularios{
       
        width: 100%;
        height: 250px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    .container h2{
        border:solid 1px red;
    }
    .conatiner{
       
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: black;
     
    }
</style>
</html>
