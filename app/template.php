<?php 
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: ../index.php');
    exit();
} else {
    $user_active = $_SESSION['usuario'];
    $nivel_acceso = $_SESSION['nivel'];
    $cvu = $_SESSION['v_util'];
}
include_once '../app/sections.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favico.png">
    <title> -- Document -- </title>
    <link rel="stylesheet" href="../css/materialize.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php echo $nav;?>


</body>
</html>