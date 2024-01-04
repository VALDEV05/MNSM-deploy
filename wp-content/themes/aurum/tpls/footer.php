<?php

/**
 *	Aurum WordPress Theme
 *
 *	Laborator.co
 *	www.laborator.co
 */

$footer_style               = get_data('footer_style');
$footer_widgets             = get_data('footer_widgets');
$footer_widgets_collapsed   = get_data('footer_collapse_mobile');
$footer_text                = get_data('footer_text');
$footer_text_right          = get_data('footer_text_right');
$footer_menu                = ltrim(get_data('footer_menu'), '_');

?>
<div class="site-footer-element-decoration">
    <svg id="Livello_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2400 374.08">
        <defs>
            <style>
                .cls-1 {
                    fill: #161513;
                    stroke-width: 0px;
                }
            </style>
        </defs>
        <g id="Livello_1-2">
            <path class="cls-1" d="M2400,374.08c-73.59-130.02-223.61-269.14-547.56-186.69-92.17,21.04-176.95,27.86-247.13-24.64,0,0,29.97,59.51,14.04,98.18-15.75,38.47-108.68,103.29-306.88,91.16-198.01-12.32-271.79-141.96-245.42-268,0,0-69.99,38.66-124.42,21.04C888.38,87.51,662.3-14.08,488.76,1.65,352.77,13.97,102.42,40.12,0,373.32" />
        </g>
    </svg>
    <div class="container">
        <h1>Info & Legal</h1>
    </div>
</div>

<footer class="site-footer">

    <div class="container">
        <div class="row">
            <div class="col-md-4 first-column">


                <div class="museo-info_footer">
                    <?php echo the_field('info_museo_footer', 'options'); ?>
                </div>
                <div class="container-policy">
                    <a target="_blank" href="<?php echo the_field('link_privacy_policy', 'options'); ?>">Privacy Policy</a> | <a target="_blank" href="<?php echo the_field('link_cookie_policy', 'options'); ?>">Cookie Policy</a>
                </div>
                <div class="copyright-container">
                    <p><?php echo the_field('diritti_museo_footer', 'options'); ?></p>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2 second-column">
                <div class="switcher-languages">
                    SWITCHER LANGUAGES
                </div>

                <ul class="accordion-item_list">



                    <?php
                    $accordion_items = get_field('accordion_item_footer', 'options');
                    foreach ($accordion_items as $accordion_item) :
                        $accordion_item_title = $accordion_item["accordion_item_title"]; ?>
                        <li>
                            <?php echo $accordion_item_title; ?> +
                        </li>
                    <?php endforeach;
                    ?>

                </ul>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4 third_column">
                <div class="logo_footer ministero-della-cultura">
                    <?php
                    $logo_ministero_della_cultura = get_field('logo_ministero_della_cultura', 'options');
                    if (!empty($logo_ministero_della_cultura)) : ?>
                        <img src="<?php echo esc_url($logo_ministero_della_cultura['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="logo_footer direzione-generale-musei">
                    <?php
                    $logo_direzione_generale_musei = get_field('logo_direzione_generali_musei', 'options');
                    if (!empty($logo_direzione_generale_musei)) : ?>
                        <img src="<?php echo esc_url($logo_direzione_generale_musei['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="logo_footer dmsrm">
                    <?php
                    $logo_dmsrm = get_field('logo_dmsmrm', 'options');
                    if (!empty($logo_dmsrm)) : ?>
                        <img src="<?php echo esc_url($logo_dmsrm['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>

</footer>