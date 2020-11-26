<?php
  include'Controlador/ControladorLogin.php';
  include 'modelo/modeloLogin.php';
  $obj = new ControladorLogin();
  $obj -> login();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Imágenes/MC.jpg">
    <title>MC | Login</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="Vistas/css/loginstyle.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST">
      <img class="mb-4" src="Imágenes/logod.jpg" alt="" width="220" height="172">
      <h1 class="h3 mb-3 font-weight-normal">Log in</h1>
      <label for="inputEmail" class="sr-only">Correo Electronico</label>
      <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> 
Remember Me
        </label>
      </div>
      <button name="login" value="entrar" class="btn btn-lg btn-primary btn-block" type="submit">
Get in</button>
      <p class="mt-5 mb-3 text-muted">
        <a href="registro.php">Register</a>
      </p>
    </form>
  </body>
</html>