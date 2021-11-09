<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('/css/design.css'); ?>" type="text/css">
    <title>CryptoThink MVC</title>
  </head>
  <body>
    <div class="container fondo">
        <div class="row">
            <div class="col-md-6 offset-3">
              <br>
              <div class="card">
                  <div class="card-body card-bodyy text-center">
                <form method="POST" action="<?php echo site_url('login'); ?>">
                    <div class="form-group">
                        <label for="usuario"><b>Usuario</b></label>
                            <input type="text" class="form-control" name='usuario'>
                    </div>
                    <div class="form-group">
                        <label for="password"><b>Contraseña</b></label>
                            <input type="password" class="form-control" name="password">
                    </div>
                        <input type="submit" class="btn btn-primary" value="Iniciar Sesion">
                </form>
                <br>
                <a class="btn btn-secondary" id="botoncito" href="<?php echo site_url('registro'); ?>">Registrarse</a>
                </div>
              </div>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>