<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
      <h1>Aprendiendo PHP</h1>

      <?php $resultado=$_POST; ?>
      <?php $nombre=$resultado['nombre']; ?>
      <?php $apellido=$resultado['apellido']; ?>

      <?php
      // Validar inputs
        if(! (filter_has_var(INPUT_POST, 'nombre') && (strlen(filter_input(INPUT_POST, 'nombre')) > 0))){
          echo "El nombre es obligatorio";
        }
        else{ ?>
          <p>Nombre: <?php echo $nombre; ?></p>
        <?php } ?>


      <?php
        if(!isset($apellido) || trim($apellido) !=''){ ?>
          <p>Apellido: <?php echo $apellido ?></p>
        <?php }
        else{
          echo "El apellido es obligatorio";
        }
      ?>

        <hr>

      <?php
        // Validar checkbox
        if(isset($_POST['notificaciones'])){
          $notificaciones=$_POST['notificaciones'];
          if($notificaciones=='on'){
            echo "Se ha suscrito correctamente";
          }
        }
        
      ?>
      
    </div>
  </body>
</html>
