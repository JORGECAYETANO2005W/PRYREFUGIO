<?php
require_once "./config/app.php";
require_once "./autoload.php";
if (isset($_GET['views'])) {
    $url = explode("/", $_GET['views']);
} else {
    $url = 'login';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once "./app/views/inc/head.php" ?>

</head>
<body>
    <?php require_once "./app/views/inc/navbar.php" ?>
    
<?php
// Cargar el slider
use app\controllers\sliderControlador;

$sliderControlador = new sliderControlador();
$sliderControlador->mostrarSlider();
?>

<!-- Contenido adicional de la página principal -->
<div class="container">
    <!-- Aquí va el contenido principal de la página -->
</div>

</body>
</html>
