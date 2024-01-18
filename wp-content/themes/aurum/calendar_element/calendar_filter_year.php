<?php

$loop_for_year = new WP_Query($args);

$postQueryArray_for_year = $loop_for_year->posts;
$year_with_post = array();

foreach ($postQueryArray_for_year as $postSingle_for_year) {
    $id_evento = $postSingle_for_year->ID;
    $data_evento = get_field('data_evento', $id_evento);
    $data_evento_array = explode("/", $data_evento);
    $year_data_evento = $data_evento_array["2"];
    array_push($year_with_post, $year_data_evento);
}
$array_year = array_unique($year_with_post, SORT_NUMERIC);


wp_reset_postdata();


?>


<div class="selector-for-year">
    <select name="" id="" class="form-select" aria-label="Year">
        <?php foreach ($array_year as $array_year_single) :?>
            <option value="<?php echo $array_year_single;?>"><?php echo $array_year_single;?></option>
        <?php endforeach; ?>
    </select>
</div>