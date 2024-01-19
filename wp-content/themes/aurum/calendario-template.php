<?php
/*
	Template Name: Calendario Museo
*/

/**
 *	Aurum WordPress Theme
 *
 *	Laborator.co
 *	www.laborator.co
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}

get_header();
echo '<div class="container-calendar-template">';

@include('calendario_museo.php');

the_content();

echo '</div>';

get_footer(); 