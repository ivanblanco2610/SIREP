<?php
$message_error = '';
if(isset($_GET['error'])){
    $error = $_GET['error'];
    switch($error){
      case 1:
        $message_error = 'Datos incorrectos, verifique sus credenciales<br>
        <p>Si no cuenta con sus datos de acceso pongase en contacto con Soporte Técnico <b>soporte@icel.edu.mx</b></p>';
      break;
      case 2:
        $message_error = 'Usted no ha iniciado sesión';
      break;
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favico.png">
    <link href="css/materialize.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="js/materialize.js"></script>
    <title>Bienvenidos</title>
    <style>
         body {
        background-image: url(img/bg.gif);
        }
     
</style>
</head>
<body>
    <div class="container">
      <div class="row" style="margin-top: 5%;">
      <div class="col s8 offset-s2 center-align z-depth-5" style="background-color: mintcream;">
          <img  src="img/banner_index.png" style="width: 100%; margin-top: 1%;">
          <h5 style="color: #0a2952 ;">Ingrese sus datos de acceso</h5>
          <form action="app/logic/session.php" method="POST">
            <div class="row">
          <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="usuario" required>
          <label for="icon_prefix">Usuario</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">vpn_key</i>
          <input id="icon_telephone" type="password" class="validate" name="password" required>
          <label for="icon_telephone">Ingrese su Contraseña</label>
        </div>
        </div>
        <div class="divider" style="margin-bottom: 3%;"></div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Acceder
          <i class="material-icons right">send</i>
        </button>
        <br><br>
    </form>
        <p style="color:red;"><?php echo $message_error;?></p>
  </div>
      </div>
      </div>
  
</body>
</html>