<?php
require('conn.php');	
if(!empty($_POST))
{
  $usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
  $password = mysqli_real_escape_string($mysqli,$_POST['password']);
  $error = '';

  $sql = "SELECT * FROM users_sirep WHERE user = '$usuario' AND pass = '$password'";
  $result=$mysqli->query($sql);
  $rows = $result->num_rows;
  
  if($rows > 0) {
    $row = $result->fetch_assoc();
        // Evalua si tiene password generico y lo envía a la página de actualización de password
      if($row['pass'] == '12345678'){
      $user =  $row['id'];
      echo '<script type="text/javascript">window.location.href="update_password.php?usuario=',$user,'"</script>';
      }
      // Evalua si es un usuario que cuenta sólo con acceso al gestor de vehículo utilitario y lo redirije
      elseif($row['nivel'] == 20 and $row['v_util'] == 1){
              session_start();
              $_SESSION['usuario'] = $row['nombre'];
              $_SESSION['nivel'] = $row['nivel'];
              header("location: ../../AgendaVUI/");
        // Evalua si es un usuario que cuenta sólo con acceso al reporte de requisiciones utilitario y lo redirije
          }elseif($row['nivel'] == 21){
           session_start();
            $_SESSION['usuario'] = $row['nombre'];
            $_SESSION['nivel'] = $row['nivel'];
            header("location: ../../Adm-Fin/");
          }
          // Si no se cumple ninguna condición anterior se envia a inicio de SIREP
          else{
            session_start();
            $_SESSION['usuario'] = $row['nombre'];
            $_SESSION['nivel'] = $row['nivel'];
            $_SESSION['v_util'] = $row['v_util'];
            header("location: ../");
          }
    
    } else {
    $error = 1;
    //echo '<script type="text/javascript">window.location.href="https://soporte.icel.edu.mx/index.php"</script>';
    header("Location:../../index.php?error=$error");
    exit();
  }
}else{
    $error = 2;
    header("Location:../../index.php?error=$error");
    exit();
}
