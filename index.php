<?php 
  session_start();
  if (!$_SESSION["sesion_valida"]) {
    header("Location: login.php");
    exit();
  }
?>
<?php
  include 'ImageUploader.php';

	include 'Controlador/ControladorVistas.php';
	include 'Controlador/ControladorLogin.php';
  include 'Controlador/ControladorProductos.php';
  include 'Controlador/ControladorPedidos.php';
  include 'Controlador/ControladorComentarios.php';
  include 'Controlador/ControladorServicios.php';

	include 'modelo/modeloLogin.php';
  include 'modelo/modeloProductos.php';
  include 'modelo/modeloPedidos.php';
	include 'Modelo/modeloComentarios.php';
  include 'modelo/modeloServicios.php';

  include 'plantilla.php';
?>  