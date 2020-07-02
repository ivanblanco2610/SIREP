<?php
 $nav_ini ='
<header>
<div class="navbar-fixed">
<!-- Opciones Mercadotecnia -->
<ul id="mercadotecnia" class="dropdown-content">
  <li><a href="../Mkt/">Ingreso/Reingreso</a></li>
</ul>
<!-- Opciones Admin-Finanzas -->
<ul id="adm-fin" class="dropdown-content">
  <li><a href="../Adm-Fin/ingresos.php" target="_blank">Ingresos</a></li>
  <li><a href="../Adm-Fin/carven.php">Cartera Vencida</a></li>
  <li><a href="#!">Becas Convenios</a></li>
  <li class="divider"></li>
  <li><a href="#!">Descarga Pagos</a></li>
  <li><a href="#!">Utlerías</a></li>
</ul>
<!-- Opciones Academicos -->
<ul id="academic" class="dropdown-content">
  <li><a href="#!">Matrícula</a></li>
  <li><a href="#!">Indices de Reprobación</a></li>
  <li><a href="#!">Titulación Electrónica</a></li>
</ul>
  <nav>
    
      <div class="nav-wrapper">
        <a href="#" class="brand-logo"><img class="responsive-img" src="../img/logo_SIREP.png" style="max-width: 180px; margin-left: 10%;"></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class="dropdown-trigger" href="#!" data-target="mercadotecnia">Mercadotecnia<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-trigger" href="#!" data-target="adm-fin">Administración/Finanzas<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-trigger" href="#!" data-target="academic">Acádemicos<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="logic/logout.php"><i class="material-icons right">close</i>Salir</a></li>
      </ul>
        <ul class="right sidenav" id="nav-mobile">
          <li class="hide-on-small-only"><a href="collapsible.html"><i class="material-icons">arrow_back</i></a></li>
        </ul>
        <a class="sidenav-trigger" href="#" data-target="nav-mobile"><i class="material-icons">menu</i></a>
      </div>
    
  </nav>
</div>
</header>
 ';

 // *********************** Navegación de las secciones de SIREP
 $nav_sections ='
 <header>
 <div class="navbar-fixed">
 <!-- Opciones Mercadotecnia -->
 <ul id="mercadotecnia" class="dropdown-content">
   <li><a href="../Mkt/">Ingreso/Reingreso</a></li>
 </ul>
 <!-- Opciones Admin-Finanzas -->
 <ul id="adm-fin" class="dropdown-content">
   <li><a href="../Adm-Fin/ingresos.php" target="_blank">Ingresos</a></li>
   <li><a href="../Adm-Fin/carven.php">Cartera Vencida</a></li>
   <li><a href="#!">Becas Convenios</a></li>
   <li class="divider"></li>
   <li><a href="#!">Descarga Pagos</a></li>
   <li><a href="#!">Utlerías</a></li>
 </ul>
 <!-- Opciones Academicos -->
 <ul id="academic" class="dropdown-content">
   <li><a href="#!">Matrícula</a></li>
   <li><a href="#!">Indices de Reprobación</a></li>
   <li><a href="#!">Titulación Electrónica</a></li>
 </ul>
   <nav>
   
       <div class="nav-wrapper">
         <a href="../app/" class="brand-logo"><img class="responsive-img" src="../img/logo_SIREP.png" style="max-width: 180px; margin-left: 10%;"></a>
         <ul id="nav-mobile" class="right hide-on-med-and-down">
         <li><a href="../app/">Inicio</a></li>
         <li><a class="dropdown-trigger" href="#!" data-target="mercadotecnia">Mercadotecnia<i class="material-icons right">arrow_drop_down</i></a></li>
         <li><a class="dropdown-trigger" href="#!" data-target="adm-fin">Administración/Finanzas<i class="material-icons right">arrow_drop_down</i></a></li>
         <li><a class="dropdown-trigger" href="#!" data-target="academic">Acádemicos<i class="material-icons right">arrow_drop_down</i></a></li>
         <li><a href="../app/logic/logout.php"><i class="material-icons right">close</i>Salir</a></li>
       </ul>
         <ul class="right sidenav" id="nav-mobile">
           <li class="hide-on-small-only"><a href="collapsible.html"><i class="material-icons">arrow_back</i></a></li>
         </ul>
         <a class="sidenav-trigger" href="#" data-target="nav-mobile"><i class="material-icons">menu</i></a>
       </div>
     </div>
   </nav>

 </header>
  ';

// *******************************************************************

$footer = '
<footer class="page-footer">
          <div class="container">
            <div class="row center-align">
              <div class="col l4 s12">
                <p class="grey-text text-lighten-4">Usuario Activo: <b>'.$user_active.'</b></p>
                <img class="img-responsive" src="../img/icon_usuario.png" style="max-width: 100px;">
              </div>
              <div class="col l4 s12">
            <img class="img-responsive" src="../img/icel.png" style="max-width: 200px;">
            </div>
              <div class="col l4  s12">
                <h5 class="white-text">Coordinación General de Centros de Cómputo</h5>
                <p>Contacto</p>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Tel: 4161 7600,</a></li>
                  <li><p>Ext. 224, 225, 226, 240</p></li>
                  <li><a class="grey-text text-lighten-3" href="#!">soporte@icel.edu.mx</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2020 Universidad ICEL
            </div>
          </div>
        </footer>
';

$footer_reports = '
<footer class="page-footer">
          <div class="footer-copyright">
            <div class="container">
            © 2020 Universidad ICEL
            </div>
          </div>
        </footer>
';

// ****************************** SECCION DE INICIO PARA USUARIOS DE NIVEL 1 ************************

$content_ini_niv_1 = '
<div class="row center-align" style="background-color: #e0e0e0">
<div class="col s12 m6">
    <h3 style="color: #424242"><b>Campus CDMX</b></h3>
</div>
<div class="col s12 m6">
    <h3 style="color: #424242"><b>Campus Foráneos</b></h3>
</div>
</div>
<div class="row" style="margin-top: -100px;">
<div class="col s12 m6">
<div class="carousel">
    <a class="carousel-item" href="#one!"><img src="../img/campi/zonarosa.png"><h5 class="center-align">Zona Rosa</h5></a>
    <a class="carousel-item" href="#two!"><img src="../img/campi/berlin.png"><h5 class="center-align">Berlín</h5></a>
    <a class="carousel-item" href="#three!"><img src="../img/campi/ermita.png"><h5 class="center-align">Ermita</h5></a>
    <a class="carousel-item" href="#four!"><img src="../img/campi/zaragoza.png"><h5 class="center-align">Zaragoza</h5></a>
    <a class="carousel-item" href="#five!"><img src="../img/campi/villa.png"><h5 class="center-align">La Villa</h5></a>
    <a class="carousel-item" href="#six!"><img src="../img/campi/tlalpan.png"><h5 class="center-align">Tlalpan</h5></a>
  </div>
</div>
<div class="col s12 m6">
<div class="carousel">
    <a class="carousel-item" href="#"><img src="../img/campi/cuautitlan.png"><h5 class="center-align">Cuautitlán</h5></a>
    <a class="carousel-item" href="#"><img src="../img/campi/lverdes.png"><h5 class="center-align">Lomas Verdes</h5></a>
    <a class="carousel-item" href="#"><img src="../img/campi/coacalco.png"><h5 class="center-align">Coacalco</h5></a>
    <a class="carousel-item" href="#"><img src="../img/campi/cuernavaca.png"><h5 class="center-align">Cuernavaca</h5></a>
    <a class="carousel-item" href="#"><img src="../img/campi/ecatepec.jpg"><h5 class="center-align">Ecatepec</h5></a>
  </div>
</div>
</div>
';
?>