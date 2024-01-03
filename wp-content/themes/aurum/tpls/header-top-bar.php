<?php

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

/* function timestamp_to_day_name_italia($name_day_today){
    $name_day_italian = array(
        'Mon' => 'Lunedì',
        'Tue' => 'Martedì',
        'Wed' => 'Mercoledì', 
        'Thu' => 'Giovedì',
        'Fri' => 'Venerdì',
        'Sat' => 'Sabato',
        'Sun' => 'Domenica'
    );
    return $name_day_italian[$name_day_today];
} */
    $day_today = date('d');
    $months_today = timestamp_to_date_italian(date("m"));
    $years_today = date('Y');
    /* $name_day_today = date("D");
    $name_today_for_opening_hours = timestamp_to_day_name_italia($name_day_today); */
?>
<div class="site-header_top-bar">
    <div class="container">
        <div class="row">
            <div class="text-centered">
            Oggi <span class="day"><?php echo $day_today; ?></span> <span class="month"><?php echo $months_today; ?></span> <span class="year"><?php echo $years_today; ?></span> siamo aperti 9.30 - 19.30

            </div>
            <div class="social-menu_widget">
                <ul>
                    <li>
                        <a href="https://www.instagram.com/museodeglistrumentimusicali/" target="_blank">
                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.4759 30.3489C23.4707 30.3489 29.9518 23.779 29.9518 15.6745C29.9518 7.56998 23.4707 1 15.4759 1C7.48108 1 1 7.56998 1 15.6745C1 23.779 7.48108 30.3489 15.4759 30.3489Z" stroke="#E2E0DC" stroke-width="0.735626" stroke-miterlimit="10" />
                                <path d="M18.8892 6.00684H11.5472C8.29084 6.00684 5.65234 8.68153 5.65234 11.9825V19.4253C5.65234 22.7262 8.29084 25.4009 11.5472 25.4009H18.8892C22.1455 25.4009 24.784 22.7262 24.784 19.4253V11.9825C24.784 8.68153 22.1455 6.00684 18.8892 6.00684ZM22.9477 18.709C22.9477 21.3768 20.8143 23.5359 18.1861 23.5359H12.2537C9.62204 23.5359 7.49212 21.3768 7.49212 18.709V12.6953C7.49212 10.031 9.62545 7.86839 12.2537 7.86839H18.1861C20.8143 7.86839 22.9477 10.031 22.9477 12.6953V18.709Z" fill="#E2E0DC" />
                                <path d="M15.4756 10.6296C12.6903 10.6296 10.4375 12.9167 10.4375 15.7367C10.4375 18.5568 12.6937 20.8439 15.4756 20.8439C18.2574 20.8439 20.5136 18.5568 20.5136 15.7367C20.5136 12.9167 18.2574 10.6296 15.4756 10.6296ZM15.4756 18.8094C13.7996 18.8094 12.4445 17.4322 12.4445 15.7367C12.4445 14.0413 13.7996 12.6641 15.4756 12.6641C17.1515 12.6641 18.5066 14.0378 18.5066 15.7367C18.5066 17.4357 17.1481 18.8094 15.4756 18.8094Z" fill="#E2E0DC" />
                                <path d="M21.4457 10.55C21.4457 11.2662 20.8723 11.8475 20.1623 11.8475C19.4523 11.8475 18.8823 11.2662 18.8823 10.55C18.8823 9.83373 19.4558 9.24896 20.1623 9.24896C20.8689 9.24896 21.4457 9.83027 21.4457 10.55Z" fill="#E2E0DC" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/people/MNSM-Museo-Nazionale-degli-Strumenti-Musicali-Pagina-Istituzionale/100068307037558/" target="_blank">
                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.5242 30.3489C23.5191 30.3489 30.0001 23.779 30.0001 15.6745C30.0001 7.56998 23.5191 1 15.5242 1C7.52942 1 1.04834 7.56998 1.04834 15.6745C1.04834 23.779 7.52942 30.3489 15.5242 30.3489Z" stroke="#E2E0DC" stroke-width="0.735626" stroke-miterlimit="10" />
                                <path d="M18.5043 9.24206H20.5318V6.01029H17.4905C17.4905 6.01029 15.579 5.96185 14.3605 7.56735C14.3605 7.56735 13.531 8.35973 13.5174 10.6849V13.1105H10.5103V16.543H13.5174V25.4113H16.9853V16.543H19.9686L20.385 13.1105H16.9887V10.6849C16.9956 10.4151 17.115 9.21784 18.5077 9.24206H18.5043Z" fill="#E2E0DC" />
                            </svg>

                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /.site-header_top-bar -->