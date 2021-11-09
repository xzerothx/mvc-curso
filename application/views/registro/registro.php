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
                <form method="POST" action="<?php // echo site_url('registrar'); ?>">
                    <div class="form-group">
                        <label for="newuser"><b> Nuevo Usuario</b></label>
                            <input type="text" class="form-control" name='newuser'>
                    </div>
                    <div class="form-group">
                        <label for="password"><b>Nueva Contraseña</b></label>
                            <input type="password" class="form-control" name="newpwd">
                    </div>
                        <input type="submit" class="btn btn-primary" value="REGISTRARSE">
                </form>
                <br>
                <a href="<?php echo site_url('login'); ?>" class="btn btn-secondary">Ya estoy registrado</a>
                
                </div>
              </div>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>