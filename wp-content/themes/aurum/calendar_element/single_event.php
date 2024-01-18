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
} else if ($type_evento_prenotation_field == "Ingresso a pagamento") {
    $type_evento_prenotation_status = "ingresso_a_pagamento";
} else if ($type_evento_prenotation_field == "Ingresso su prenotazione") {
    $type_evento_prenotation_status = "ingresso_su_prenotazione";
}

/* IMMAGINE FEATURED */
$featured_image_event_url = wp_get_attachment_url(get_post_thumbnail_id($id_evento));

/* DESCRIZIONE EVENTO */
$description_event = $postSingle->post_content;

/* LINK PRENOTAZIONE EVENTO */
$link_book_event =  get_field('link_prenotazione_evento', $id_evento);

?>
<div class="content-single-event">
    <div class="content-single-event_container-general-info-event">
        <div class="left">


            <div class="content-single-event_container-general-info-event_day-event">
                <?php echo $day_data_evento; ?>
            </div>
            <!-- /.content-single-event_container-general-info-event_day-event -->
            <div class="content-single-event_container-general-info-event_orario-event">
                <?php echo $string_orario_evento; ?>
            </div>
            <!-- /.content-single-event_container-general-info-event_orario-event -->
        </div>
        <div class="content-single-event_container-general-info-event_title-event right">
            <?php echo $title_evento; ?>
        </div>
        <!-- /.content-single-event_container-general-info-event_title-event -->
    </div>
    <!-- /.content-single-event_container-general-info-event -->
    <div class="content-single-event_container-image">
        <img src="<?php echo $featured_image_event_url; ?>" alt="">
    </div>
    <!-- /.content-single-event_container-general-info-event -->
    <div class="content-single-event_type-event">
        <?php echo $type_evento_prenotation_field; ?>
    </div>
    <!-- /.content-single-event_type-event -->
    <div class="content-single-event_description">
        <?php echo $description_event; ?>
    </div>
    <!-- /.content-single-event_description -->
    <div class="content-single-event_cta-book-event">
        <a href="<?php echo $link_book_event; ?>">
            <span class="icona">
                <svg xmlns="http://www.w3.org/2000/svg" width="109" height="12" viewBox="0 0 109 12" fill="none">
                    <path d="M97.6667 6C97.6667 8.94552 100.054 11.3333 103 11.3333C105.946 11.3333 108.333 8.94552 108.333 6C108.333 3.05448 105.946 0.666667 103 0.666667C100.054 0.666667 97.6667 3.05448 97.6667 6ZM0 7H103V5H0V7Z" fill="#E9AD00" />
                </svg>
            </span>
            PRENOTA ORA
        </a>
    </div>
    <!-- /.content-single-event_cta-book-event -->
</div>
<!-- /.content-single-event -->