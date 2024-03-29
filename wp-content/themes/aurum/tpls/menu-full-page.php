<div class="menu-full-page-custom-mnsm">
    <div class="container_custom-menu-full-page">
        <div class="container container-menu">
            <?php @include('header-menu.php')?>
        </div>
        <div class="container_custom-menu-full-page container_custom-menu-full-page_element-background">
            <div class="strumento-musicale">
                <?php $strumento_musicale = get_field('strumento_musicale_menu_full_page', 'option');
                if (!empty($strumento_musicale)) : ?>
                    <img src="<?php echo esc_url($strumento_musicale['url']); ?>" alt="<?php echo esc_attr($strumento_musicale['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="social-network">
                <?php @include('social-network-dark.php'); ?>
            </div>
        </div>
        <!-- /.container_custom-menu-full-page_element-background -->
    </div>
    <!-- /.container_custom-menu-full-page -->
</div>
<!-- /.menu-full-page-custom-mnsm -->