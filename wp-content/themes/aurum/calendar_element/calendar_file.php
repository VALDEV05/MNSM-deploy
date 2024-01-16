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
    /* var_dump($loop); */

    while ($loop->have_posts()) : $loop->the_post();
        print the_title();
        the_excerpt();
    endwhile;
    wp_reset_postdata();

    ?>
</div>