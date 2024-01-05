<div class="site-header_top-bar">
    <div class="container">
        <div class="row">
            <div class="text-centered">
                Oggi <span class="date"><?php echo date('d'); ?> <?php echo timestamp_to_date_italian(date("m")) ?> <?php echo date('Y'); ?></span>
                <?php echo do_shortcode('[mbhi location="Roma"]'); ?>
            </div>
            <?php @include('social-network.php'); ?>
        </div>
    </div>
</div>
<!-- /.site-header_top-bar -->