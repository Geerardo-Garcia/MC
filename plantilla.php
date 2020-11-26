<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>MC - Tu Mejor Opcion | Inicio</title>
  <link rel="icon" href="Imágenes/MC.jpg">
	<link rel="stylesheet" href="Vistas/css/styles.css">
  <link rel="stylesheet" href="Vistas/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

</head>
<body>

  <div class="container-fluid" style="margin-top: 10px;">
    <div class="row">
      <div class="col-md-12">
        <?php
          include 'Vistas/menu.php';
        ?>
      </div>
    </div>
  </div>
  
  <?php
  $obj = new ControladorVistas();
	$obj -> secciones();
  ?>

  <footer>

    <div class="container-fluid" style="background-color: rgb(255,255,255);">
      <br>
    </div>
    <div style="background-color: rgb(255,255,255);">
      <div class="container" style="background-color: rgb(255,255,255);">

        <CENTER>
          <h2 style="color: black"><b>CONTACTAME EN:</b></h2>
          <a href="https://www.facebook.com/MayoristadeComputo/" target="_blank"><button class="boton2"><img src="Imágenes/facebook.png" alt="Facebook" title="Christian Batres | Facebook" style="float: inherit; width: 60px;"></button></a>
          <a href="https://wa.me/526143838182?text=Hola%20Quisiera%20Comunicarme%20Con%20Tigo" target="_blank"><button class="boton2"><img src="Imágenes/W.jpg" alt="Instagram" title="Christian Batres | Instagram" style="float: inherit; width: 60px; margin-left: 10px;"></button></a>
          <a href="mailto:gg6281554@gmail.com?Subject=Aquí%20el%20asunto%20del%20mail" target="_blank"><button class="boton2"><img src="Imágenes/correo.png" alt="Linkedin" title="Christian Batres | Linkedin" style="float: inherit; width: 60px; margin-left: 10px;"></button></a>
          <br>
          <h4 style="color: grey; font-family: fantasy;">Eduardo Ramirez | <a href="#"> Mayoristas en Computo </a> | Agua Marina#601 Pte.La Esperanza Gomez Palacio,DGO</h4>
          
        </CENTER>
      </div>
    </div>

  </footer>

<script src="Vistas/js/jquery-3.4.1.min.js"></script>
<script src="Vistas/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
      $(document).ready( function () {
          $('#myTable').DataTable();
      });
  </script>
</body>
</html>