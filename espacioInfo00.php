<?php 
		session_start();		
		if ($_SESSION['sesionValida'] != 'uno123') {
		   session_destroy();
		   header("Location: /index.php");
		   exit;
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espacio interno</title>
    <link rel="icon" href="./src/images/logoCeiich.png">
    <meta name="description" content="Pagina principal del Centro de Investigaciones Interdiciplinarias en Ciencias y Humanidades">
        <!-- Estilos de FontAwesome -->
        <link rel="stylesheet" href="./styles/libraries/fontawesome-5.15.1/css/all.min.css">
         <!-- Swiper IO -->
        <link rel="stylesheet" href="./styles/libraries/Swiper/swiper.min.css">
        <!-- Estilos del sitio -->
        <link rel="stylesheet" href="./styles/styles.css">   
</head>
<script>
  function mostrar(enla , etik) {
  obj = document.getElementById(etik);
  obj.style.display = (obj.style.display == 'block') ? 'none' : 'block';
  enla.innerHTML = (enla.innerHTML == '[-]') ? '[+]' : '[-]';
  }
</script>
<body>
  <?php
        require './php/header2.php';
  ?>
  <main>
    <section class="inv">
      <section class="espacioInformativo">
        <div align="center">
          <img src="../src/images/Banner-espacio-informativo-CEIICH.jpg" width="250" height="115">
        </div>
        <div class="total">
          <p align="right">Por su seguridad, no olvide salir de esta página<br/>
            <a href="espacioCerrar.php"><strong><font color="#244064">SALIR</font></strong></a>
          </p>
        </div>
        <section class="galeria">
          <div class="swiper-slide2">
              <a href="espacioInfo01.php"><img src="../src/images/menuEI01.jpg"></a>
          </div>
          <div class="swiper-slide2">
              <a href="espacioInfo02.php"><img src="../src/images/menuEI02.jpg"></a>
          </div>
          <!--<div class="swiper-slide2">
              <a href="docs/actas/1. CUADRO CONVOCATORIAS DE PROGRAMA1.pdf" target="_blank"><img src="../src/images/menuEI03.jpg"></a>
          </div>-->
          <div class="swiper-slide2">
              <a href="espacioInfo03.php"><img src="../src/images/menuEI04.jpg"></a>
          </div>
        </section>
      </section>
    </section>
  </main>

<?php
  require './php/footer2.php'
?>
    <script src="./js/libraries/Swiper/swiper.min.js"></script>
    <script src="./js/jquery-latest.js"></script>
    <script src="./js/menuResponsive.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>