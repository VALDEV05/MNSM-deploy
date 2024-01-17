<div class="list-complete-event">
    <?php
    /**
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

    $loop = new WP_Query($args);
    $postQueryArray = $loop->posts;
    foreach ($postQueryArray as $postSingle) {
        @include('calendar_file_event.php');
    }
    wp_reset_postdata();

    ?>
</div>