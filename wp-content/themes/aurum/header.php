<?php

/**
 *	Aurum WordPress Theme
 *
 *	Laborator.co
 *	www.laborator.co
 */
if (!defined('ABSPATH')) {
	exit; // Direct access not allowed.
}

?>
<!DOCTYPE html>
<!-- =============================================================================================================== -->
<!-- =============================================================================================================== -->
<!-- =============================================================================================================== -->
<!-- =============================================================================================================== -->
<!-- @author Valerio Corda -->
<!-- @email info@valeriocorda.it -->
<!-- @website https://valeriocorda.it -->
<!-- If you can dream it, I can code it.  -->
<!-- =============================================================================================================== -->
<!-- =============================================================================================================== -->
<!-- =============================================================================================================== -->
<!-- =============================================================================================================== -->
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

	<?php
	/**
	 * Hooks before header
	 */
	do_action('aurum_body_start');
	get_template_part('tpls/menu-full-page');
	/**
	 * Site header
	 */
	if (!defined('LAB_HEADERLESS')) {
		get_template_part('tpls/header');
	}
	?>