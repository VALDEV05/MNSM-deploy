<?php

/**
 * Calendario
 * @author Valeriocorda <info@valeriocorda.it> 
 * 

 * Setup query to show the eventi post type with ‘8’ posts.
 * Output the title with an excerpt.
 */
$args = array(
    'post_type' => 'eventi',
    'post_status' => 'publish',
    'posts_per_page' => 8,
    'meta_key' => 'data_evento',
    'orderby' => 'meta_value',
    'order' => 'ASC'
);

?>
<div class="container-switcher-date-calendar">
    <?php
    @include('calendar_filter_month.php');
    @include('calendar_filter_year.php');
    ?>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>
<div class="list-complete-event swiper-pagination">
    <?php


    $loop = new WP_Query($args);
    $postQueryArray = $loop->posts;
    foreach ($postQueryArray as $postSingle) {
        @include('calendar_file_event.php');
    }

    wp_reset_postdata();

    ?>
</div>
<div class="list-complete-event list-complete-event_very">
    <?php


    $loop = new WP_Query($args);
    $postQueryArray = $loop->posts;
    foreach ($postQueryArray as $postSingle) {
        @include('calendar_file_event.php');
    }

    wp_reset_postdata();

    ?>
</div>