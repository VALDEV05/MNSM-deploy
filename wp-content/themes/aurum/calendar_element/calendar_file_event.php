<?php
/**
 * 
 * Giorno in evidenza -> $day_data_evento;
 * Mese in evidenza -> $month_data_evento;
 * Anno in evidenza -> $year_data_evento;
 * 
 * Data Completa Evento -> $data_evento;
 * 
 * Orario evento -> $orario_evento;
 * Stringa Completa Orario Evento -> $string_orario_evento;
 * 
 * 
 * Titolo Evento -> $title_evento;
 * 
 * Tipologia Evento
 * 
 * 
 *  */

/* ID EVENTO */
$id_evento = $postSingle->ID;

/* DATA EVENTO */
$data_evento = get_field('data_evento', $id_evento);
$data_evento_array = explode("/", $data_evento);
$day_data_evento = $data_evento_array["0"];
$month_data_evento = $data_evento_array["1"];
$year_data_evento = $data_evento_array["2"];

/* ORARIO EVENTO */
$orario_evento = get_field('evento_orario', $id_evento);
$string_orario_evento = "ore " . $orario_evento;

/* TITOLO EVENTO */
$title_evento = $postSingle->post_title;


/* TIPOLOGIA EVENTO PRENOTAZIONE */
$type_evento_prenotation_field = get_field('tipologia_evento', $id_evento);
$type_evento_prenotation_status = "";
if ($type_evento_prenotation_field == "Ingresso Libero") {
    $type_evento_prenotation_status = "ingresso_libero";
} else if ($type_evento_prenotation_field == "Ingresso a pagamento"){
    $type_evento_prenotation_status = "ingresso_a_pagamento";
} else if ($type_evento_prenotation_field == "Ingresso su prenotazione"){
    $type_evento_prenotation_status = "ingresso_su_prenotazione";
} 


/* TIPOLOGIA GIORNATA EVENTO */
$type_daily_evento_field = get_field('tipologia_giornata_evento', $id_evento);


?>

<div class="single-event">
    <div class="single-event_day-event">
        <?php echo $day_data_evento;?>
        <!-- AGGIUNGERE LA TIPOLOGIA DELL'EVENTO CON PALLINI -->
        <span ></span>
    </div>
    <!-- /.single-event_day-event -->
    <div class="single-event_orario-event">
        <?php echo $string_orario_evento;?>
    </div>
    <!-- /.single-event_orario-event -->
    <div class="single-event_title-event">
        <?php echo $title_evento;?>
    </div>
    <!-- /.single-event_title-event -->
</div>
<!-- /.single-event -->