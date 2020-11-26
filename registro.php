<?php
	include'Controlador/ControladorLogin.php';
	include 'Modelo/ModeloLogin.php';
	$obj = new ControladorLogin();
	$obj -> registrarUsuario();
?>

<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="Vistas/css/loginstyle.css" rel="stylesheet">
<link rel="icon" href="Imágenes/MC.jpg">

<form class="form-signin" method="POST">
  <img class="mb-4" src="Imágenes/agregar.jpg" alt="" width="172" height="172">
  <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

  <label for="inputPasswordConfirm" class="sr-only">Password Confirm</label>
  <input type="password" name="passwordConfirm" id="inputPassword" class="form-control" placeholder="Password Confirm" required>

  <input type="submit" name="Registrar" value="Registro" class="btn btn-lg btn-primary btn-block"></input>
</form>