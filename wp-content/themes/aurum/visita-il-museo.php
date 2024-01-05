<?php
/*
	Template Name: Visita Museo
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

echo '<div class="page-container standalone-container visita-museo-template">';

the_content();

echo '</div>';

get_footer();