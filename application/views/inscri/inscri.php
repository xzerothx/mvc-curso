<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Inscripcion</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <br>
                <div class="card">
                    <div class="card-body">
                <form method='POST' action=''>
                <div class="form-group row">
                    <label class="col-4 col-form-label" for="nombre">Nombre</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-user"></i>
                        </div>
                        </div> 
                        <input id="nombre" name="nombre" placeholder="Introduzca su nombre." type="text" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="apellido" class="col-4 col-form-label">Apellido</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-user"></i>
                        </div>
                        </div> 
                        <input id="apellido" name="apellido" placeholder="Introduzca su apellido." type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="dni" class="col-4 col-form-label">DNI</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-card-o"></i>
                        </div>
                        </div> 
                        <input id="dni" name="dni" placeholder="Introduzca su DNI." type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tel_contacto" class="col-4 col-form-label">Teléfono de Contacto</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-phone"></i>
                        </div>
                        </div> 
                        <input id="tel_contacto" name="tel_contacto" placeholder="Introduzca su teléfono." type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Quiero inscribirme en el curso</label> 
                    <div class="col-8">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="cursos" id="cursos_0" type="checkbox" aria-describedby="cursosHelpBlock" class="custom-control-input" value="rabbit"> 
                        <label for="cursos_0" class="custom-control-label">Rabbit</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="cursos" id="cursos_1" type="checkbox" aria-describedby="cursosHelpBlock" class="custom-control-input" value="duck"> 
                        <label for="cursos_1" class="custom-control-label">Duck</label>
                    </div> 
                    <span id="cursosHelpBlock" class="form-text text-muted">Seleccione los cursos de su interés.</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nombre_emergencia" class="col-4 col-form-label">Contacto de emergencia</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-book-o"></i>
                        </div>
                        </div> 
                        <input id="nombre_emergencia" name="nombre_emergencia" placeholder="Introduzca un nombre en caso de emergencia." type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tel_emergencia" class="col-4 col-form-label">Teléfono de Emergencia</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-volume-control-phone"></i>
                        </div>
                        </div> 
                        <input id="tel_emergencia" name="tel_emergencia" placeholder="Introduzca un teléfono de emergencia." type="text" class="form-control">
                    </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </form>
             </div>
            </div>
        </div>
    </div>
</div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>
