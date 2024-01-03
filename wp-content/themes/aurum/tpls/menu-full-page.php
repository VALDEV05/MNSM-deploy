<div class="menu-full-page-custom-mnsm">
    <div class="container_custom-menu-full-page">
        <?php $strumento_musicale = get_field('strumento_musicale_menu_full_page', 'option');
        if (!empty($strumento_musicale)) : ?>
            <img src="<?php echo esc_url($strumento_musicale['url']); ?>" alt="<?php echo esc_attr($strumento_musicale['alt']); ?>" />
        <?php endif; ?>
    </div>
    <!-- /.container_custom-menu-full-page -->
</div>
<!-- /.menu-full-page-custom-mnsm -->