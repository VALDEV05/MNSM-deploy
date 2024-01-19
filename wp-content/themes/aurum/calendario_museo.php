<?php

/**
 * Content page calendar Museo
 * 
 @author VALDEV05
 * 
 * */


?>

<section class="container-page-calendar">
    <section class="container-page-calendar_title">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4>Calendario</h4>
                </div>
                <!-- /.col-md-8 -->
                <div class="col-md-4">
                    <div class="container_filter_calendar">

                        <div class="container_filter_calendar_item container_filter_calendar_item_concerti">
                            <div class="dot-element"></div>
                            Concerti
                        </div>
                        <div class="container_filter_calendar_item container_filter_calendar_item_aperture-straordinarie">
                            <div class="dot-element"></div>
                            Aperture Straordinarie
                        </div>

                        <div class="container_filter_calendar_item container_filter_calendar_item_progetti">
                            <div class="dot-element"></div>
                            Progetti
                        </div>
                        <div class="container_filter_calendar_item container_filter_calendar_item_visite-guidate">
                            <div class="dot-element"></div>
                            Visite Guidate
                        </div>
                    </div>
                    <!-- /.container_filter_calendar -->
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <div class="element-decoration-title-la-storia">
            <img src="../../../wp-content/uploads/2024/01/background-sheet-music.svg" alt="">
        </div>
    </section>
    <!-- /.container-page-calendar_title -->
    <section class="container-page-calendar_main-content">
        <div class="container">
            <div class="row ">
                <div class="col-md-8">
                    <?php @include('calendar_element/calendar_file.php'); ?>
                </div>
                <!-- /.col-md-8 -->
                <div class="col-md-3">

                    <?php @include('calendar_element/active_single_event.php') ?>
                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.container-page-calendar_main-content -->

    <section class="container-page-calendar_fixed-appoinments">
        <section class="container-page-calendar_title ">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h4>Appuntamenti <strong>fissi</strong></h4>
                    </div>
                    <!-- /.col-md-7 -->
                    <div class="container-rassegne">
                        <img src="../../..//wp-content/uploads/2024/01/cta-icon-yellow.svg" alt="">
                        <div class="container-rassegne_text">
                            Rassegne & Progetti
                        </div>
                        <!-- /.container-rassegne_text -->
                    </div>
                     <!-- /.container-rassegne -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
            <div class="element-decoration-title-la-storia">
                <img src="../../../wp-content/uploads/2024/01/background-sheet-music.svg" alt="">
            </div>
        </section>
        <!-- /.container-page-calendar_title -->
    </section>
    <!-- /.container-page-calendar_fixed-appoinments -->
</section>
<!-- /.container-page-calendar -->