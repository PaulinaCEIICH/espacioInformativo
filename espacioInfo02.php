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
    <link rel="icon" href="../src/images/logoCeiich.png">
    <meta name="description" content="Pagina principal del Centro de Investigaciones Interdiciplinarias en Ciencias y Humanidades">
        <!-- Estilos de FontAwesome -->
        <link rel="stylesheet" href="../styles/libraries/fontawesome-5.15.1/css/all.min.css">
         <!-- Swiper IO -->
        <link rel="stylesheet" href="../styles/libraries/Swiper/swiper.min.css">
        <!-- Estilos del sitio -->
        <link rel="stylesheet" href="../styles/styles.css">
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
        require './php/menuelCeiich.php';
  ?>
  <main>
    <div>
      <a href="javascript:subir();"><i class="fas fa-angle-up up" alt="Ir arriba"></i></a>
    </div>
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
              <h2>PROCEDIMIENTOS INTERNOS</h2>

              <div class="hov">
                <a href="javascript:mostrarCoLiPe();"><i class="fas fa-record-vinyl"> COMISIONES, LICENCIAS Y PERMISOS</i></a>
                <div id="flotanteCoLiPe" class="flotante">
                  <a href="javascript:cerrarCoLiPe();"><i2 class="fas fa-times-circle"></i2></a>
                  <table>
                    <tr>
                      <td><p><a href="https://www.ceiich.unam.mx/0/docs/formatos/COMISIONES ACADEMICAS-Mayores a tres dias.pdf" target="_blank"><i2 class="fas fa-angle-right"> Comisiones: Mayores a tres días</i2></a></p></td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/4. Comision. Mayores a tres dias.docx">Formato</a></td>
                    </tr>
                    <tr>
                      <td><p><a href="https://www.ceiich.unam.mx/0/docs/formatos/COMISIONES ACADEMICAS-Permisos de ausencias cortas.pdf" target="_blank"><i2 class="fas fa-angle-right"> Comisiones: Permisos de ausencias cortas </i2></a></p></td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/3. Comision. Permisos de ausencias cortas.docx">Formato</a></td>
                    </tr>
                    <tr>
                      <td><p><a href="https://www.ceiich.unam.mx/0/docs/formatos/LICENCIAS ACADEMICAS-Con goce de sueldo.pdf" target="_blank"><i2 class="fas fa-angle-right"> Licencias: Con goce de sueldo</i2></a></p></td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/1. Licencia. Con goce de sueldo.docx">Formato</a></td>
                    </tr>
                    <tr>
                      <td><p><a href="https://www.ceiich.unam.mx/0/docs/formatos/LICENCIAS ACADEMICAS-Sin goce de sueldo.pdf" target="_blank"><i2 class="fas fa-angle-right"> Licencias: Sin goce de sueldo</i2></a></p></td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/2. Licencia. Sin goce de sueldo.docx">Formato</a></td>
                    </tr>
                  </table>
                </div>
              </div>

              <div class="hov">
                <a href="javascript:mostrarSabatico();"><i class="fas fa-record-vinyl"> SABÁTICO</i></a>
                <div id="flotanteSabatico" class="flotante">
                  <a href="javascript:cerrarSabatico();"><i2 class="fas fa-times-circle"></i2></a>
                  <table>
                    <tr>
                      <td><p><i2 class="fas fa-angle-right"> Disfrute de Sabático</i2></p></td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/5. Disfrute de Sabatico.docx">Formato</a></td>
                    </tr>
                    <tr>
                      <td><p><i2 class="fas fa-angle-right"> Regularización de diferimiento de sabático</i2></p></td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/5.1 Diferimiento de Sabatico (Ya paso fecha de inicio).docx">Formato</a></td>
                    </tr>
                    <tr>
                      <td><p><i2 class="fas fa-angle-right"> Diferimiento de Sabático</i2></p></td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/5.2 Diferimiento de Sabatico (No ha iniciado).docx">Formato</a></td>
                    </tr>
                    <tr>
                      <td><p><i2 class="fas fa-angle-right"> Informe de Sabático</i2></p></td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/Informe sabatico.docx">Formato</a></td>
                    </tr>
                  </table>
                </div>
              </div>

              <div class="hov">
                <a href="javascript:mostrarPromocion();"><i class="fas fa-record-vinyl"> PROMOCIÓN, DEFINITIVIDAD <br>Y CAMBIO DE ADSCRIPCIÓN</i></a>
                <div id="flotantePromocion" class="flotante">
                  <a href="javascript:cerrarPromocion();"><i2 class="fas fa-times-circle"></i2></a>
                  <table>
                    <tr>
                      <td><p><i2 class="fas fa-angle-right"> Carta de promoción y definitividad</i2></p></td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/6. Carta de promocion y definitividad.docx">Formato</a></td>
                    </tr>
                    <tr>
                      <td><p><i2 class="fas fa-angle-right"> Cambio de Adscripción Temporal</i2></p></td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/7. Cambio de Adscripcion Temporal.docx">Formato</a></td>
                    </tr>
                  </table>
                </div>
              </div>


              <div class="hov">
                <a href="javascript:mostrarMovilidad();"><i class="fas fa-record-vinyl"> MOVILIDAD ENTRANTE</i></a>
                <div id="flotanteMovilidad" class="flotante">
                  <a href="javascript:cerrarMovilidad();"><i2 class="fas fa-times-circle"></i2></a>
                  <table>
                    <tr>
                      <td><p><i2 class="fas fa-angle-right"> Estancias de Investigación</i2></p></td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/9. Estancias de Investigacion.docx">Formato</a></td>
                    </tr>
                    <tr>
                      <td><p><i2 class="fas fa-angle-right"> Gastos de intercambio</i2></p></td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/10. Gastos de intercambio.docx">Formato</a></td>
                    </tr>
                  </table>
                </div>
              </div>

              <div class="hov">
                <a href="javascript:mostrarBecas();"><i class="fas fa-record-vinyl"> PROGRAMA DE BECAS</i></a>
                <div id="flotanteBecas" class="flotante">
                  <a href="javascript:cerrarBecas();"><i2 class="fas fa-times-circle"></i2></a>
                  <table>
                    <tr>
                      <td><p><i2 class="fas fa-angle-right"> Becas CEIICH. Carta compromiso</i2></p></td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/8. Becas CEIICH. Carta compromiso.docx">Formato</a></td>
                    </tr>
                    <tr>
                      <td><p><i2 class="fas fa-angle-right"> Becas CEIICH. Formato de Solicitud Becas</i2></p></td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/8.1 Becas CEIICH. Formato de Solicitud Becas.docx">Formato</a></td>
                    </tr>
                  </table>
                </div>
              </div>
          </section>
        </div>
      </div>
    </section>
</main>

<?php
  require './php/footer2.php'
?>
    <script src="./js/main.js"></script>
    <script src="./js/libraries/Swiper/swiper.min.js"></script>
    <script src="./js/jquery-latest.js"></script>
    <script src="./js/menuResponsive.js"></script> 
 </body>
 </html>
