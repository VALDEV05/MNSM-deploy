<?php
$args = array(
    'post_type' => 'eventi',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'meta_key' => 'data_evento',
    'orderby' => 'meta_value',
    'order' => 'ASC'
);


$loop = new WP_Query($args);
$postQueryArray = $loop->posts;


?>
<!-- Slider main container -->
<div class="swiper swiper_single_event">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <?php
        foreach ($postQueryArray as $postSingle) : ?>
            <div class="swiper-slide">
                <?php @include('single_event.php'); ?>

            </div>
        <?php endforeach; ?>
    </div>

    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

<?php

wp_reset_postdata();


?>