<?php
namespace app\controllers;

use app\models\sliderModel;

class sliderControlador extends sliderModel {

    public function mostrarSlider() {
        $sliderModelo = new sliderModel();
        $slides = $sliderModelo->obtenerSlides();
        include_once './app/views/inc/slider.php';
    }

}
?>
