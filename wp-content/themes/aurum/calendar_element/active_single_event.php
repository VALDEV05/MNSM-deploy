<?php
$args = array(
    'post_type' => 'eventi',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'meta_key' => 'data_evento',
    'orderby' => 'meta_value',
    'order' => 'ASC'
);


$loop = new WP_Query($args);
$postQueryArray = $loop->posts;
foreach ($postQueryArray as $postSingle) {
    @include('single_event.php');
}
wp_reset_postdata();


?>
