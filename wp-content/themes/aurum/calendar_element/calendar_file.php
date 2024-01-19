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
    <div class="swiper-button-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="24" viewBox="0 0 22 24" fill="none">
            <path d="M0.939341 10.9393C0.353554 11.5251 0.353554 12.4749 0.93934 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97918 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.939341 10.9393ZM22 10.5L2 10.5L2 13.5L22 13.5L22 10.5Z" fill="white" />
        </svg>
    </div>
    <div class="switcher-date">
        <?php
        @include('calendar_filter_month.php');
        @include('calendar_filter_year.php');
        ?>
    </div>
    <!-- .swithcer-date -->
    <div class="swiper-button-next">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="24" viewBox="0 0 22 24" fill="none">
            <path d="M21.0607 13.0607C21.6464 12.4749 21.6464 11.5251 21.0607 10.9393L11.5147 1.3934C10.9289 0.807611 9.97919 0.807611 9.3934 1.3934C8.80761 1.97919 8.80761 2.92893 9.3934 3.51472L17.8787 12L9.3934 20.4853C8.80761 21.0711 8.80761 22.0208 9.3934 22.6066C9.97919 23.1924 10.9289 23.1924 11.5147 22.6066L21.0607 13.0607ZM0 13.5H20V10.5H0V13.5Z" fill="white" />
        </svg>
    </div>
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