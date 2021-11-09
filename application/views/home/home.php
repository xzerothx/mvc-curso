<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('/css/home.css'); ?>" type="text/css">
    <css></css>
    <title>Home</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col col-md-12 offset-1">
          <br>
          <div class="card">
            <div class="card-body box">
              <?php        
              foreach($curso->result_array() as $c){ ?>
                              <div class="card" style="width: 18rem;" id='carta'>
                              <?php if(!file_exists(FCPATH.'img/'.$c['curso_id'].'.png')){
                                $img = base_url('img/nd.png');;
                              }else{
                                $img = base_url('img/'.$c['curso_id'].'.png');
                                }
                                 ?>
                                <img src='<?php echo $img; ?>' class="card-img-top" width="300px" height="300px">
                                  <div class="card-body">
                                      <h5 class="card-title"><?php echo $c['curso']; ?></h5>
                                        <p class="card-text"><?php echo $c['descripcion']; ?></p>
                                      <a href="<?php echo site_url('inscripcion'); ?>" class="btn btn-primary">Inscribirse</a>
                              </div>
                                  </div>
                <?php } ?>
            </div>
          </div>
        </div>
      </div>
      </div>








    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>
 

  
