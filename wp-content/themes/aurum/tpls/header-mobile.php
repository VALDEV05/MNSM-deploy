<?php

/**
 *	Aurum WordPress Theme
 *
 *	Laborator.co
 *	www.laborator.co
 */

$header_sticky_menu_mobile = get_data('header_sticky_menu_mobile');
$header_cart_info_show_in_header = get_data('header_cart_info_show_in_header');

$nav_id = 'main-menu';

if (has_nav_menu('mobile-menu')) {
	$nav_id = 'mobile-menu';
}

$menu = wp_nav_menu(array(
	'theme_location' => $nav_id,
	'container' => '',
	'menu_class' => 'mobile-menu',
	'echo' => false
));
?>
<header class="mobile-menu mobile-menu_custom">
	<?php get_template_part('tpls/header-top-bar'); ?>


	<section class="mobile-logo">
		<div class="container">
			<div class="row">

				<?php
				/**
				 * Logo
				 */
				get_template_part('tpls/header-logo-secondary');

				?>

				<div class="active-menu-full-page_mobile">
					<svg width="59" height="34" viewBox="0 0 59 34" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect x="8.5" y="33.5" width="7" height="50" rx="3.5" transform="rotate(-90 8.5 33.5)" fill="#161513" />
						<rect x="0.5" y="20.5" width="7" height="50" rx="3.5" transform="rotate(-90 0.5 20.5)" fill="#161513" />
						<rect x="8.5" y="7.5" width="7" height="50" rx="3.5" transform="rotate(-90 8.5 7.5)" fill="#161513" />
					</svg>

				</div>
				<div class="close-menu-full-page_mobile">
					<svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12.2513 0.193176L21.6573 14.2167L22.3413 15.7559L23.1964 14.2167L32.5169 0.193176H44.5737L29.0111 22.5111L44.8303 45H32.7735L23.1109 31.062L22.3413 29.6084L21.6573 31.062L12.0802 45H0.0234375L15.8426 22.7676L0.279965 0.193176H12.2513Z" fill="#161513" />
					</svg>

				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('tpls/header-bottom-bar'); ?>
	<section class="mobile-menu--content">

		<?php

		/**
		 * Search field
		 */
		if (apply_filters('aurum_show_search_field_on_mobile', true)) :

		?>
			<div class="search-site<?php echo get_search_query() ? ' is-visible' : ''; ?>">

				<?php
				/**
				 * Search form
				 */
				get_template_part('tpls/header-search-form');
				?>

			</div>
		<?php

		endif;

		/**
		 * Menu mobile
		 */
		echo $menu;

		/**
		 * Cart icon under mobile menu
		 */
		if (!$header_cart_info_show_in_header) {
			aurum_show_header_cart_icon();
		}

		/**
		 * Header top bar
		 */
		add_filter('get_data_header_top_style', aurum_hook_return_value('light'));

		get_template_part('tpls/header-top-bar');
		?>

		</div>

</header>