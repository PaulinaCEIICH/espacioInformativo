<?php 
  require './php/header2.php';
  require './php/menuelCeiich.php';

session_start();		
		if ($_SESSION['sesionValida'] != 'uno123') {
		   session_destroy();
		   header("Location: /index.php");
		   exit;
		}
?>
<script>
function mostrar(enla , etik) {
  obj = document.getElementById(etik);
obj.style.display = (obj.style.display == 'block') ? 'none' : 'block';
  enla.innerHTML = (enla.innerHTML == '[-]') ? '[+]' : '[-]';
}
</script>
<script src="./js/main.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espacio interno</title>
    <link rel="icon" href="../src/images/logoCeiich.png">
    <meta name="description" content="Pagina principal del Centro de Investigaciones Interdiciplinarias en Ciencias y Humanidades">
        <!-- Estilos de FontAwesome -->
        <link rel="stylesheet" href="../styles/libraries/fontawesome-5.15.1/css/all.min.css">
         <!-- Swiper IO -->
        <link rel="stylesheet" href="../styles/libraries/Swiper/swiper.min.css">
        <!-- Estilos del sitio -->
        <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
  <main>
    <section class="inv">
        <div align="center">
          <img src="../src/images/Banner-espacio-informativo-CEIICH.jpg" width="250" height="115">
        </div>
        <div class="total">
          <div class="swiper-espacioInformativo">
            <p align="right">Por su seguridad, no olvide salir de esta página<br/>
            <a href="espacioCerrar.php"><strong><font color="#244064">SALIR</font></strong></a>
            </p>
            <section class="organos">
              <h2>DOCENCIA</h2>
              <a href="https://www.ceiich.unam.mx/0/docs/formatos/Convenios y Bases de Colaboracion de Docencia y Educacion Continua.docx"><i2 class="fas fa-chevron-circle-right"> Convenios y Bases de Colaboración de Docencia y Educación Continua</i2></a><br>
              <a href="https://www.ceiich.unam.mx/0/docs/formatos/La Educacion continua en el CEIICH.docx"><i2 class="fas fa-chevron-circle-right"> La Educación continua en el CEIICH</i2></a><br>
              <a href="https://www.ceiich.unam.mx/0/docs/formatos/Proceso para inicio y termino de servicio social.docx"><i2 class="fas fa-chevron-circle-right">  Proceso para inicio y término de servicio social</i2></a>
            </section>
        </div>
      </div>
    </section>
  </main>

<?php
  require './php/footer2.php'
?>
  <script src="./js/libraries/Swiper/swiper.min.js"></script>
    <script src="./js/jquery-latest.js"></script>
    <script src="./js/menuResponsive.js"></script> 
 </body>
