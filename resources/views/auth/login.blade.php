<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="theme-color" content="#343a40" />
        <title>Registro Servicio CCI</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <link rel="stylesheet" href="css/app.css" type="text/css" />

    </head>

    <body>

        <div class="header"></div>

        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col-6">
                    <form  method="POST" action="/login">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="correo">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email" name="email">
                            @if ($errors->has('email'))
                                <div class="alert alert-warning" role="alert">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="contra">Contraseña</label>
                            <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password">
                            @if ($errors->has('password'))
                                <div class="alert alert-warning" role="alert">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>

        <div class="header"></div>

        @include('layouts.footer')

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    </body>
</html>