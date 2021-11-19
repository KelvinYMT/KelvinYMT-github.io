<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar</title>
    <link rel="stylesheet" href="2.css">
    <link rel="stylesheet" href="font.css">
    <link rel="stylesheet" href="indexp.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="pie.css">
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
    <div id="index">
      <?php if(!empty($user)): ?>
        <div class="mesage">
          <br> Bienvenido <?= $user['email']; ?>
          <br>Iniciaste sesion correctamente
          <a href="logout.php">
          Cerrar sesion
          </a>
          <br>
          <br>
          <br>
          <div class="selectpeli">
          <br>
              <table class="default" >
                <tr class="efect">
                  <td><img src="cholitas.jpg" class="imgrese"></img></td>
                  <td class=" spac"><div class="va"><img src="okey.png" class="ok"></div></td>
                  <td class="letra"><a href="form1.html"><h1>RESERVAR</h1></a></td>
                </tr>
                <tr class="efect">
                  <td ><img src="venom2.jpeg" class="imgrese"></img>
                  <td class=" spac"><div class="va"><img src="okey.png" class="ok"></div></td>
                  <td class="letra"><a href="form2.html"><h1>RESERVAR</h1></a></td>
                </tr>
                <tr class="efect">
                  <td><img src="dune.jpg" class="imgrese"></img>
                  <td class=" spac"><div class="va"><img src="okey.png" class="ok"></div></td>
                  <td class="letra"><a href="form3.html"><h1>RESERVAR</h1></a></td>
                </tr>
                <tr class="efect">
                  <td><img src="etern.jpg" class="imgrese"></img>
                  <td class=" spac"><div class="va"><img src="okey.png" class="ok"></div></td>
                  <td class="letra"><a href="form4.html"><h1>RESERVAR</h1></a></td>
                </tr>
                <tr class="efect">
                  <td><img src="muralla.jpg" class="imgrese"></img>
                  <td class=" spac"><div class="va"><img src="okey.png" class="ok"></div></td>
                  <td class="letra"><a href="form5.html"><h1>RESERVAR</h1></a></td>
                </tr>
                <tr class="efect">
                  <td><img src="hallowen.jpg" class="imgrese"></img>
                  <td class=" spac"><div class="va"><img src="okey.png" class="ok"></div></td>
                  <td class="letra"><a href="form6.html"><h1>RESERVAR</h1></a></td>
                </tr>
              </table>
            </div>
        </div>
        <?php else: ?>
            <div class="let">
              <h1 class="tut"><a href="fin.html">AYUDA</a></h1><br>
              <h1>Primero Debe Registrarse</h1>
              <h1>o<h1>
              <h1> Iniciar Sesion</h1><br>
              <a href="login.php">Iniciar Sesion</a>
              <a href="signup.php">Registrarse</a>

            </div>
      <?php endif; ?>
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
                <div class="twit"><span class="icon-twitte"></span><a href="https://twitter.com/cinematecabol" class="n">@cinematecabol</a></div><br>
            </div>
      </div>
  </body>
</html>