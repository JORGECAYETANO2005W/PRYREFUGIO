<?php
    require_once "./config/app.php";
    require_once "./autoload.php";
    if (isset($_GET['views'])) {
        $url=explode("/",$_GET['views']);
    }else{
        $url= 'login';
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once  "./app/views/inc/head.php" ?>

</head>
<body>
    <h1>Refugio Cachorros</h1>
    <?php require_once "./app/views/inc/navbar.php" ?>
</body>
</html>
