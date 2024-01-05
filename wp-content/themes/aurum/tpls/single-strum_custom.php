<?php

/**
 *	Valerio Corda 
 * 
 *  Single Template Strumento
 *
 * 
 * 
 * 
 */
if (!defined('ABSPATH')) {
    exit; // Direct access not allowed.
}

$gallery_strumento = get_field('galleria_strumento_musicale');
$id_strumento = get_field('id_strumento_musicale');
$id_catalogo_generale_oa_strumento = get_field('id_catalogo_generale_oa_strumento_musicale');
$data_di_compilazione_eo_revisione_scheda_oa_strumento = get_field('data_di_compilazione_eo_revisione_scheda_oa_strumento_musicale');
$opera_strumento = get_field('opera_strumento_musicale');
$famiglia_strumento = get_field('famiglia_strumento_musicale');
$periodo_anno_strumento = get_field('periodoanno_strumento_musicale');
$ambito_culturale_strumento = get_field('ambito_culturale_strumento_musicale');
$autore_attribuzione_strumento = get_field('autoreattribuzione_strumento_musicale');
$collezione_strumento = get_field('collezioni_strumento_musicale');
$materiali_strumento = get_field('materiali_strumento_musicale');
$misure_in_cm_strumento  = get_field('misure_in_cm_strumento_musicale');
$luogo_di_conservazione_strumento = get_field('luogo_di_conservazione_strumento_musicale');
$link_scopri_di_piu_strumento = get_field('link_scopri_di_piu_strumento_musicale');
$file_download_strumento = get_field('file_download_strumento_musicale')["url"];
?>

<section class="container-strum">
    <?php if ($gallery_strumento) : ?>
        <div class="container container-strum_gallery">
            <?php foreach ($gallery_strumento as $image_strumento) : ?>
                <?php #var_dump($image_strumento);
                ?>
                <img src="<?php echo $image_strumento["url"] ?>" alt="<?php echo $image_strumento["alt"] ?>">
            <?php endforeach; ?>

        </div>
    <?php endif; ?>
    <!-- /.container container-strum_gallery -->
    <div class="container container-strum_title">
        <h1><?php echo the_title(); ?></h1>
    </div>
    <!-- /.container container-strum_title -->
    <div class="container-strum_container-info">
        <div class="row">
            <div class="col-md-6">
                <?php if ($id_strumento) : ?>
                    <div class="container-strum_inventario-mnsm">
                        <div class="container-strum_subtitle">
                            Inventario Museo Nazionale degli Strumenti Musicali
                        </div>
                        <!-- /.container-strum_subtitle -->
                        <div class="container-strum_element-dynamic">
                            <?php echo $id_strumento; ?>
                        </div>
                        <!-- /.container-strum_element-dynamic -->
                    </div>
                    <!-- /.container-strum_inventario-mnsm -->
                <?php endif; ?>
                <?php if ($id_catalogo_generale_oa_strumento) : ?>
                    <div class="container-strum_inventario-mnsm">
                        <div class="container-strum_subtitle">
                            Catalogo generale OA
                        </div>
                        <!-- /.container-strum_subtitle -->
                        <div class="container-strum_element-dynamic">
                            <?php echo $id_catalogo_generale_oa_strumento; ?>
                        </div>
                        <!-- /.container-strum_element-dynamic -->
                    </div>
                    <!-- /.container-strum_inventario-mnsm -->
                <?php endif; ?>
                <?php if ($data_di_compilazione_eo_revisione_scheda_oa_strumento) : ?>
                    <div class="container-strum_inventario-mnsm">
                        <div class="container-strum_subtitle">
                            Data di compilazione e/o revisione scheda OA
                        </div>
                        <!-- /.container-strum_subtitle -->
                        <div class="container-strum_element-dynamic">
                            <?php echo $data_di_compilazione_eo_revisione_scheda_oa_strumento; ?>
                        </div>
                        <!-- /.container-strum_element-dynamic -->
                    </div>
                    <!-- /.container-strum_inventario-mnsm -->
                <?php endif; ?>
                <?php if ($opera_strumento) : ?>
                    <div class="container-strum_inventario-mnsm">
                        <div class="container-strum_subtitle">
                            Opera
                        </div>
                        <!-- /.container-strum_subtitle -->
                        <div class="container-strum_element-dynamic">
                            <?php echo $opera_strumento; ?>
                        </div>
                        <!-- /.container-strum_element-dynamic -->
                    </div>
                    <!-- /.container-strum_inventario-mnsm -->
                <?php endif; ?>
                <?php if ($famiglia_strumento) : ?>
                    <div class="container-strum_inventario-mnsm">
                        <div class="container-strum_subtitle">
                            Famiglia
                        </div>
                        <!-- /.container-strum_subtitle -->
                        <div class="container-strum_element-dynamic">
                            <?php echo $famiglia_strumento; ?>
                        </div>
                        <!-- /.container-strum_element-dynamic -->
                    </div>
                    <!-- /.container-strum_inventario-mnsm -->
                <?php endif; ?>
                <?php if ($periodo_anno_strumento) : ?>
                    <div class="container-strum_inventario-mnsm">
                        <div class="container-strum_subtitle">
                            Periodo / Anno
                        </div>
                        <!-- /.container-strum_subtitle -->
                        <div class="container-strum_element-dynamic">
                            <?php echo $periodo_anno_strumento; ?>
                        </div>
                        <!-- /.container-strum_element-dynamic -->
                    </div>
                    <!-- /.container-strum_inventario-mnsm -->
                <?php endif; ?>
                <?php if ($ambito_culturale_strumento) : ?>
                    <div class="container-strum_inventario-mnsm">
                        <div class="container-strum_subtitle">
                            Ambito Culturale
                        </div>
                        <!-- /.container-strum_subtitle -->
                        <div class="container-strum_element-dynamic">
                            <?php echo $ambito_culturale_strumento; ?>
                        </div>
                        <!-- /.container-strum_element-dynamic -->
                    </div>
                    <!-- /.container-strum_inventario-mnsm -->
                <?php endif; ?>
                <?php if ($autore_attribuzione_strumento) : ?>
                    <div class="container-strum_inventario-mnsm">
                        <div class="container-strum_subtitle">
                            Autore/Attribuzione
                        </div>
                        <!-- /.container-strum_subtitle -->
                        <div class="container-strum_element-dynamic">
                            <?php echo $autore_attribuzione_strumento; ?>
                        </div>
                        <!-- /.container-strum_element-dynamic -->
                    </div>
                    <!-- /.container-strum_inventario-mnsm -->
                <?php endif; ?>
                <?php if ($collezione_strumento) : ?>
                    <div class="container-strum_inventario-mnsm">
                        <div class="container-strum_subtitle">
                            Collezione
                        </div>
                        <!-- /.container-strum_subtitle -->
                        <div class="container-strum_element-dynamic">
                            <?php echo $collezione_strumento; ?>
                        </div>
                        <!-- /.container-strum_element-dynamic -->
                    </div>
                    <!-- /.container-strum_inventario-mnsm -->
                <?php endif; ?>
                <?php if ($materiali_strumento) : ?>
                    <div class="container-strum_inventario-mnsm">
                        <div class="container-strum_subtitle">
                            Materiali
                        </div>
                        <!-- /.container-strum_subtitle -->
                        <div class="container-strum_element-dynamic">
                            <?php echo $materiali_strumento; ?>
                        </div>
                        <!-- /.container-strum_element-dynamic -->
                    </div>
                    <!-- /.container-strum_inventario-mnsm -->
                <?php endif; ?>
                <?php if ($misure_in_cm_strumento) : ?>
                    <div class="container-strum_inventario-mnsm">
                        <div class="container-strum_subtitle">
                            Misure in cm. (largh./alt./lungh.)
                        </div>
                        <!-- /.container-strum_subtitle -->
                        <div class="container-strum_element-dynamic">
                            <?php echo $misure_in_cm_strumento; ?>
                        </div>
                        <!-- /.container-strum_element-dynamic -->
                    </div>
                    <!-- /.container-strum_inventario-mnsm -->
                <?php endif; ?>
                <?php if ($luogo_di_conservazione_strumento) : ?>
                    <div class="container-strum_inventario-mnsm">
                        <div class="container-strum_subtitle">
                            Luogo di conservazione
                        </div>
                        <!-- /.container-strum_subtitle -->
                        <div class="container-strum_element-dynamic">
                            <?php echo $luogo_di_conservazione_strumento; ?>
                        </div>
                        <!-- /.container-strum_element-dynamic -->
                    </div>
                    <!-- /.container-strum_inventario-mnsm -->
                <?php endif; ?>
            </div>
            <div class="col-md-6 column-description">

                <?php if (get_the_content()) : ?>
                    <div class="container-strum_description">
                        <p><?php echo the_content(); ?></p>
                    </div>
                <?php endif; ?>
                <!-- /.container-strum_description -->
                <?php if ($link_scopri_di_piu_strumento || $file_download_strumento) : ?>
                    <div class="container-strum_link">
                        <?php if ($link_scopri_di_piu_strumento) : ?>
                            <a href="<?php echo $link_scopri_di_piu_strumento ?>" target="_blank" class="read-more">
                                <img src="../../../../wp-content/uploads/2024/01/cta-icon-yellow.svg" alt="">
                                Scopri di più
                            </a>
                        <?php endif; ?>
                        <?php if ($file_download_strumento) : ?>
                            <a href="<?php echo $file_download_strumento ?>" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                    <path d="M14.4766 9.28125V13.4375C14.4766 13.7131 14.3671 13.9774 14.1722 14.1722C13.9774 14.3671 13.7131 14.4766 13.4375 14.4766H1.5625C1.28692 14.4766 1.02263 14.3671 0.827772 14.1722C0.63291 13.9774 0.523438 13.7131 0.523438 13.4375V9.28125C0.523438 9.16315 0.570354 9.04988 0.653866 8.96637C0.737379 8.88285 0.850646 8.83594 0.96875 8.83594C1.08685 8.83594 1.20012 8.88285 1.28363 8.96637C1.36715 9.04988 1.41406 9.16315 1.41406 9.28125V13.4375C1.41406 13.4769 1.4297 13.5146 1.45754 13.5425C1.48538 13.5703 1.52313 13.5859 1.5625 13.5859H13.4375C13.4769 13.5859 13.5146 13.5703 13.5425 13.5425C13.5703 13.5146 13.5859 13.4769 13.5859 13.4375V9.28125C13.5859 9.16315 13.6329 9.04988 13.7164 8.96637C13.7999 8.88285 13.9131 8.83594 14.0312 8.83594C14.1494 8.83594 14.2626 8.88285 14.3461 8.96637C14.4296 9.04988 14.4766 9.16315 14.4766 9.28125ZM7.18531 9.59594C7.26881 9.67933 7.38199 9.72617 7.5 9.72617C7.61801 9.72617 7.73119 9.67933 7.81469 9.59594L10.7834 6.62719C10.8621 6.54277 10.9049 6.43112 10.9029 6.31575C10.9008 6.20039 10.8541 6.09031 10.7725 6.00872C10.6909 5.92714 10.5809 5.8804 10.4655 5.87836C10.3501 5.87633 10.2385 5.91915 10.1541 5.99781L7.94531 8.20582V0.96875C7.94531 0.850646 7.8984 0.737379 7.81488 0.653866C7.73137 0.570354 7.6181 0.523438 7.5 0.523438C7.3819 0.523438 7.26863 0.570354 7.18512 0.653866C7.1016 0.737379 7.05469 0.850646 7.05469 0.96875V8.20582L4.84594 5.99781C4.76152 5.91915 4.64987 5.87633 4.5345 5.87836C4.41914 5.8804 4.30906 5.92714 4.22747 6.00872C4.14589 6.09031 4.09915 6.20039 4.09711 6.31575C4.09508 6.43112 4.1379 6.54277 4.21656 6.62719L7.18531 9.59594Z" fill="black" />
                                </svg>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <!-- /.container-strum_container-info -->

</section>
<!-- /.container-strum -->