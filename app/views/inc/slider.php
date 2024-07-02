<!-- slider-view.php -->
<section class="slider">
    <div class="slider-container">
        <?php foreach ($slides as $slide): ?>
            <div class="slide">
                <img src="<?php echo APP_URL; ?>public/img/<?php echo $slide['imagen']; ?>" alt="<?php echo $slide['titulo']; ?>">
                <div class="slide-text">
                    <h2><?php echo $slide['titulo']; ?></h2>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
