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
                <div class="container-strum_description">
                    <p><?php echo the_content(); ?></p>
                </div>
                <!-- /.container-strum_description -->
            </div>
        </div>
    </div>
    <!-- /.container-strum_container-info -->

</section>
<!-- /.container-strum -->