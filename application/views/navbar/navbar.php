<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('/css/navbar.css'); ?>" type="text/css">
  </head>
  <body>
    <div class="container-fluid">
  <div class="row">
    <div class="col">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src='<?php echo base_url('/img/logo.png'); ?>' class="logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse barra" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto borderlist">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('principal'); ?>">Inicio</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('/index.php/home/'); ?>">Cursos</a>
      </li>
    </ul>
      <a href="<?php echo site_url('login'); ?>" class="btn btn-primary">Salir</a>
  </div>
</nav>
</div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>
