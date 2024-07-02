<?php
namespace app\models;

class sliderModel {
    public function obtenerSlides() {
        // Aquí puedes obtener datos de imágenes del slider desde una base de datos o un arreglo
        return [
            ['imagen' => 's1.jpg', 'titulo' => 's1'],
            ['imagen' => 's2.jpg', 'titulo' => 's2'],
            ['imagen' => 's3.jpg', 'titulo' => 's3'],
            ['imagen' => 's4.jpg', 'titulo' => 's4'],
            ['imagen' => 's5.jpg', 'titulo' => 's5'],
            ['imagen' => 's6.jpg', 'titulo' => 's6']
        ];
    }
}
?>
