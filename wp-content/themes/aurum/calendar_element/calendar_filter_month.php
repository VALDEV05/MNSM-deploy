<?php
$loop_for_month = new WP_Query($args);
$postQueryArray_for_month = $loop_for_month->posts;
$month_with_post = array();
$month_with_post_name = array();
foreach ($postQueryArray_for_month as $postSingle_for_month) {
    $id_evento = $postSingle_for_month->ID;
    $data_evento = get_field('data_evento', $id_evento);
    $data_evento_array = explode("/", $data_evento);
    $month_data_evento = $data_evento_array["1"];
    array_push($month_with_post, $month_data_evento);
}
$array_month = array_unique($month_with_post, SORT_NUMERIC);
foreach ($array_month as $array_month_single) {
    $array_month_single_to_name = timestamp_to_date_italian($array_month_single);
    array_push($month_with_post_name, $array_month_single_to_name);
}
wp_reset_postdata();
?>


<div class="selector-for-month">
    <select class="form-select" aria-label="Month">
        <?php foreach ($month_with_post_name as $month_single_with_name) :
            $slug_month_name = slugify($month_single_with_name);?>
            <option value="<?php echo $slug_month_name?>"><?php echo $slug_month_name?></option>
        <?php endforeach;?>
    </select>
</div>
<!-- /.select-for-month -->