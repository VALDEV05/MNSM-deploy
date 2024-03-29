<?php

/**
 *	Aurum WordPress Theme
 *
 *	Laborator.co
 *	www.laborator.co
 */

/* Add bootstrap support to the Wordpress theme*/



function theme_add_bootstrap()
{
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '-child/bootstrap/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '-child/bootstrap/js/bootstrap.min.js', array(), true);
}

add_action('wp_enqueue_scripts', 'theme_add_bootstrap', 102);



// This function will enqueue style.css of child theme, feel free to add yours
function aurum_enqueue_child_theme_scripts()
{
    wp_enqueue_style('aurum-child', get_stylesheet_directory_uri() . '/custom-css/style.css');
}

add_action('wp_enqueue_scripts', 'aurum_enqueue_child_theme_scripts', 103);
add_action('wp_enqueue_scripts', 'add_my_script');
function add_my_script()
{
    wp_enqueue_script(
        'custom', // name your script so that you can attach other scripts and de-register, etc.
        get_template_directory_uri() . '-child/js/custom.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}



if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Header Options Supply',
        'menu_title'    => 'Header Options',
        'menu_slug'     => 'header-options-supply',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_page(array(
        'page_title'    => 'Footer Options Supply',
        'menu_title'    => 'Footer Options',
        'menu_slug'     => 'footer-options-supply',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    /* acf_add_options_sub_page(array(
        'page_title'    => 'Header First Logo',
        'menu_title'    => 'Header-first-logo',
        'parent_slug'   => 'header-options-supply',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Header Second Logo',
        'menu_title'    => 'header-second-logo',
        'parent_slug'   => 'header-options-supply',
    )); */

}


function timestamp_to_date_italian($month_number)
{       
    $months_italian = array(
            '01' => 'Gennaio', 
            '02' => 'Febbraio', 
            '03' => 'Marzo', 
            '04' => 'Aprile',
            '05' => 'Maggio', 
            '06' => 'Giugno', 
            '07' => 'Luglio', 
            '08' => 'Agosto',
            '09' => 'Settembre', 
            '10' => 'Ottobre', 
            '11' => 'Novembre',
            '12' => 'Dicembre');

          
    return $months_italian[$month_number];

}


function timestamp_to_date_italian_mobile($month_number)
{       
    $months_italian = array(
            '01' => 'Gen', 
            '02' => 'Feb', 
            '03' => 'Mar', 
            '04' => 'Apr',
            '05' => 'Mag', 
            '06' => 'Giu', 
            '07' => 'Lug', 
            '08' => 'Ago',
            '09' => 'Set', 
            '10' => 'Ott', 
            '11' => 'Nov',
            '12' => 'Dic');

          
    return $months_italian[$month_number];

}


function slugify($text)
{
    // Strip html tags
    $text=strip_tags($text);
    // Replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    // Transliterate
    setlocale(LC_ALL, 'en_US.utf8');
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    // Remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
    // Trim
    $text = trim($text, '-');
    // Remove duplicate -
    $text = preg_replace('~-+~', '-', $text);
    // Lowercase
    $text = strtolower($text);
    // Check if it is empty
    if (empty($text)) { return 'n-a'; }
    // Return result
    return $text;
}

?>


