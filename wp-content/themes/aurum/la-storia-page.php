<?php

/**
 * Content page history
 * 
 @author VALDEV05
 * 
 * */

$text_first_field_var = get_field('text_first_field');
$text_second_field_var = get_field('text_second_field');
$text_third_field_var = get_field('text_third_field');
$text_fourth_field_var = get_field('text_fourth_field');
$text_fifth_field_var = get_field('text_fifth_field');
$text_sixth_field_var = get_field('text_sixth_field');
$text_seventh_field_var = get_field('text_seventh_field');
$text_eighth_field_var = get_field('text_eighth_field');
$text_ninth_field_var = get_field('text_ninth_field');


$date_first_field_var = get_field('date_first_field');
$date_second_field_var = get_field('date_second_field');
$date_third_field_var = get_field('date_third_field');
$date_fourth_field_var = get_field('date_fourth_field');
$date_fifth_field_var = get_field('date_fifth_field');
$date_sixth_field_var = get_field('date_sixth_field');
$date_seventh_field_var = get_field('date_seventh_field');
$date_eighth_field_var = get_field('date_eighth_field');
$date_ninth_field_var = get_field('date_ninth_field');


$image_first_field_var = get_field('image_first_field')["url"];
$image_second_field_var = get_field('image_second_field')["url"];
$image_third_field_var = get_field('image_third_field')["url"];
$image_fourth_field_var = get_field('image_fourth_field')["url"];
$image_fifth_field_var = get_field('image_fifth_field')["url"];
$image_sixth_field_var = get_field('image_sixth_field')["url"];
$image_seventh_field_var = get_field('image_seventh_field')["url"];
$image_eighth_field_var = get_field('image_eighth_field')["url"];



?>


<section class="container-page-la-storia">
    <section class="container-page-la-storia_title">
        <div class="container">
            <h4>La nostra <span>Storia</span></h4>
        </div>
        <div class="element-decoration-title-la-storia">
            <img src="../../../wp-content/uploads/2024/01/background-sheet-music.svg" alt="">
        </div>
    </section>
    <!-- /.container-page-la-storia_title -->
    <section class="container-page-la-storia_text">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- RENDERE DINAMICO -->
                    <h2>La storia del museo e delle collezioni</h2>
                    <p>
                        Il Museo Nazionale degli Strumenti Musicali di Roma, costituito in gran parte dalla vasta ed eterogenea collezione privata <strong>di Evan Gorga, accoglie oggi circa <span>tremila esemplari di varia epoca e provenienza</span></strong>, dei quali oltre ottocento sono esposti.
                    </p>
                    <!-- /RENDERE DINAMICO -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.container-page-la-storia_text -->
    <section class="container-page-la-storia_container-main-page">
        <div class="element-background-decoration_storia-main-section">
            <svg width="1212" height="5607" viewBox="0 0 1212 5607" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1358 1H616.227V410.195H129.047V770.665H773.785V1260.02H1V1764.5H480.177H859.316V2097.8H458.168H69.5252V2700.33H637.735H1003.37V3214.83H69.5252V3753.5H739V4240.5H110V5606.5" stroke="#E2E0DC" stroke-dasharray="14 14" />
            </svg>

        </div>
        <div class="container-page-la-storia_container-main-page_container-element">
            <div class="date-first date">
                <?php echo $date_first_field_var; ?>
            </div>
            <div class="image-first dotted">
                <img src="<?php echo $image_first_field_var; ?>">
            </div>
            <div class="text-first text-circle">
                <p><?php echo $text_first_field_var; ?></p>
            </div>
            <div class="date-second date">
                <?php echo $date_second_field_var; ?>
            </div>
            <div class="text-second text-circle">
                <p><?php echo $text_second_field_var; ?></p>
            </div>
            <div class="image-second dotted">
                <img src="<?php echo $image_second_field_var; ?>">
            </div>
            <div class="date-third date">
                <?php echo $date_third_field_var; ?>
            </div>
            <div class="text-third text-circle">
                <p><?php echo $text_third_field_var; ?></p>
            </div>
            <div class="image-third dotted">
                <img src="<?php echo $image_third_field_var; ?>">
            </div>
            <div class="date-fourth date">
                <?php echo $date_fourth_field_var; ?>
            </div>
            <div class="text-fourth text-circle">
                <p><?php echo $text_fourth_field_var; ?></p>
            </div>
            <div class="image-fourth dotted">
                <img src="<?php echo $image_fourth_field_var; ?>">
            </div>
            <div class="date-fifth date">
                <?php echo $date_fifth_field_var; ?>
            </div>
            <div class="text-fifth text-circle">
                <p><?php echo $text_fifth_field_var; ?></p>
            </div>
            <div class="date-sixth date">
                <?php echo $date_sixth_field_var; ?>
            </div>
            <div class="text-sixth text-circle">
                <p><?php echo $text_sixth_field_var; ?></p>
            </div>
            <div class="image-fifth dotted">
                <img src="<?php echo $image_fifth_field_var; ?>">
            </div>
            <div class="date-seventh date">
                <?php echo $date_seventh_field_var; ?>
            </div>
            <div class="image-sixth dotted">
                <img src="<?php echo $image_sixth_field_var; ?>">
            </div>
            <div class="text-seventh text-circle">
                <p><?php echo $text_seventh_field_var; ?></p>
            </div>
            <div class="date-eighth date">
                <?php echo $date_eighth_field_var; ?>
            </div>
            <div class="text-eighth text-circle">
                <p>
                    <?php echo $text_eighth_field_var; ?>
                </p>
            </div>
            <div class="image-seventh dotted">
                <img src="<?php echo $image_seventh_field_var; ?>">
            </div>
            <div class="date-ninth date">
                <?php echo $date_ninth_field_var; ?>
            </div>
            <div class="text-ninth text-circle">
                <p>
                    <?php echo $text_ninth_field_var; ?>
                </p>
            </div>
            <div class="image-eighth dotted">
                <img src="<?php echo $image_eighth_field_var; ?>">
            </div>
        </div>
        <!-- /.container-page-la-storia_container-main-page_container-element -->
    </section>
    <!-- /.container-page-la-storia_container-main-page -->
</section>
<!-- /.container-page-la-storia -->
<?php
echo '<div class="page-container standalone-container visita-museo-template">';

the_content();

echo '</div>';
