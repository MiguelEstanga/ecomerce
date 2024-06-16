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
            <div class="container">
                <h2 class="alert" style="text-align: center;" >Inisiar sessión </h2>
            </div>
            
            <div class="formularios">
                <form   method="post" action="{{ route('login_post') }}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="row">
                        <button class="col-md-6 btn btn-primary" type="submit" class="btn btn-primary">
                            Submit
                        </button>
                        <a class="col-md-6 btn btn-success"  href="{{ route('registro.index') }}">
                            Registrarse
                        </a>
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
        height: 450px;
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
    .conatiner{
       
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: black;
     
    }
</style>
</html>
