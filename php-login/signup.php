<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Usuario Creado Satisfactoriamente';
    } else {
      $message = 'Lo Sentimos, Debio Existir un Error';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
  <head>
  <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="2.css">
    <link rel="stylesheet" href="font.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sign.css">
    <link rel="stylesheet" href="pie.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
  </head>
  <body>
  <nav>
        <div id="navbar">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <a href="#" class="imag">
            <img src="logo.png" class="logi">
            </a>
            <UL class="menu">
                <LI><a href="index.html">INICIO</a></LI>            
                <LI><a href="cartelera.html">CARTELERA</a></LI>
                <LI><a href="index.php">RESERVAS</a></LI>
                <LI><a href="trailers.html">TRAILERS</a></LI>
                <LI><a href="">NOSOTROS</a>
                    <ul class="submenu">
                        <li><a href="historia.html">NUESTRA HISTORIA</a></li>
                        <li><a href="presentacion.html">PRESENTACION</a></li>
                    </ul>
                </LI>
            </UL>
        </div>
    </nav>
    <div id="pseccion">
    </div>
    <div id="sseccion">
        <div class="cinta">
        </div>
    </div>
    <div class="social-bar">
        <a href="https://es-la.facebook.com/cinemateca.bo/" class="icon icon-facebook" target="_blank"></a>
        <a href="" class="icon icon-whatsapp" target="_blank"></a>
        <a href="https://twitter.com/cinematecabol" class="icon icon-twitter" target="_blank"></a>
        <a href="" class="icon icon-instagram" target="_blank"></a>

    </div>
    <div id="sign">
      <?php require 'partials/header.php' ?>

      <?php if(!empty($message)): ?>
        <p> <?= $message ?></p>
      <?php endif; ?>

      <h1>Registrarse</h1>
      <span>o <a href="login.php">Iniciar Sesion</a></span>

      <form action="signup.php" method="POST">
        <input name="email" type="text" placeholder="Ingrese su e-mail">
        <input name="password" type="password" placeholder="Ingrese una constrasena">
        <input name="confirm_password" type="password" placeholder="Confirme su contrasena">
        <input type="submit" value="ENVIAR">
      </form>
    </div>
    <div id="cseccion">
            <h1>Esperemos disfrute el cine</h1>
            <hr>
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15301.560867956017!2d-68.1255082!3d-16.5063862!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdb5745623219c38f!2sCinemateca%20Boliviana!5e0!3m2!1ses-419!2sbo!4v1636835409596!5m2!1ses-419!2sbo" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="contact">
                <h1>Contactenos</h1><br>
                <div class="telnum"><span class="icon-phone"></span><a href="22444090" class="n">2 2444090</a></div><br>
                <br>
                <div class="locate"><span class="icon-location2"></span><a href="" class="n">Rosendo Gutierrez esq. Oscar Soria, La Paz</a></div>
                <br><br>
                <div class="twit"><span class="icon-twitte"></span><a href="" class="n">@cinematecabol</a></div><br>
            </div>
        </div>
  </body>
</html>