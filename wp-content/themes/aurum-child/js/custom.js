function init() {
    branding();
    activeMenuFullPage();
    customMenuFullPage();
    customMenuVisitaMuseo();
    mobileAdjustOpeningHours();
    activeMenuFullPageMobile();
    sliderSwiperSingleEvent();
    customSlider();
}

function branding() {
    console.log('====================================');
    console.log('Created by Valerio Corda');
    console.log('Email: info@valeriocorda.it');
    console.log('Number: +393518576702');
    console.log('Website: https://valeriocorda.it');
    console.log('====================================');
}


function activeMenuFullPage() {
    const buttonToActiveMenu = jQuery(
        "body .site-header .container .row .col-md-6 .active-menu-full-page"
    );
    const buttonToCloseMenu = jQuery(
        "body .site-header .container .row .col-md-6 .close-menu-full-page"
    );
    /*const containerButton = jQuery(
        "#lc-header .site-header .row-menu.mobile .right-menu-container .right-menu .activator-toggle-menu"
    ); */
    const header = jQuery(".site-header");
    const footer = jQuery(".site-footer");
    const body = jQuery("body");
    const html = jQuery("html");
    const tl2 = gsap.timeline({
        paused: true,
    });
    tl2.to(".menu-full-page-custom-mnsm", {
        zIndex: 99,
        opacity: 1,
        duration: 0.7,
        ease: "expo.inOut",
    });
    jQuery(buttonToActiveMenu).click(function() {
        tl2.play();
        jQuery(header).addClass("activeMenuFullPage");
        jQuery(footer).addClass("activeMenuFullPage");
        jQuery(body).css("overflow-y", "hidden");
        jQuery(html).css("overflow-y", "hidden");
    });
    jQuery(buttonToCloseMenu).click(function() {
        tl2.reverse();
        header.addClass("activeMenuFullPage").removeClass("activeMenuFullPage");
        footer.addClass("activeMenuFullPage").removeClass("activeMenuFullPage");
        body.css("overflow-y", "scroll");
        html.css("overflow-y", "scroll")
    });
}

function customMenuFullPage() {
    const containerMenu = jQuery('.menu-full-page-custom-mnsm .container_custom-menu-full-page .container-menu .main-menu li.current_page_item');
    const collezioni = jQuery('.menu-full-page-custom-mnsm .container_custom-menu-full-page .container-menu .main-menu li.menu-item-has-children.menu-item-23');
    const museo = jQuery('.menu-full-page-custom-mnsm .container_custom-menu-full-page .container-menu .main-menu li.menu-item-has-children.menu-item-24');
    const attivita = jQuery('.menu-full-page-custom-mnsm .container_custom-menu-full-page .container-menu .main-menu li.menu-item-has-children.menu-item-38');

    jQuery(collezioni).click(() => {
        jQuery(containerMenu).removeClass('current_page_item');
        jQuery(collezioni).addClass('activeVoiceMenu');
        jQuery(museo).addClass('activeVoiceMenu').removeClass('activeVoiceMenu');
        jQuery(attivita).addClass('activeVoiceMenu').removeClass('activeVoiceMenu');
    })

    jQuery(museo).click(() => {
        jQuery(containerMenu).removeClass('current_page_item');

        jQuery(museo).addClass('activeVoiceMenu');
        jQuery(collezioni).addClass('activeVoiceMenu').removeClass('activeVoiceMenu');
        jQuery(attivita).addClass('activeVoiceMenu').removeClass('activeVoiceMenu');
    })

    jQuery(attivita).click(() => {
        jQuery(containerMenu).removeClass('current_page_item');
        jQuery(attivita).addClass('activeVoiceMenu');
        jQuery(collezioni).addClass('activeVoiceMenu').removeClass('activeVoiceMenu');
        jQuery(museo).addClass('activeVoiceMenu').removeClass('activeVoiceMenu');
    })
}

function customMenuVisitaMuseo() {
    if (jQuery("body").hasClass('page-template-visita-il-museo')) {
        const containerMenu = jQuery('.menu-visita-museo-navigation-container #menu-visita-museo-navigation li.menu-item');
        const elementToAdd = `<div class="icon-list-custom-menu-visita-museo_dynamic">
        <svg width="51" height="12" viewBox="0 0 51 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M39.6667 6C39.6667 8.94552 42.0545 11.3333 45 11.3333C47.9455 11.3333 50.3333 8.94552 50.3333 6C50.3333 3.05448 47.9455 0.666667 45 0.666667C42.0545 0.666667 39.6667 3.05448 39.6667 6ZM-5 7H45V5H-5V7Z"
                fill="#AF183E" />
        </svg>
    </div>
        `
        jQuery(containerMenu).each((i) => {
            const containerMenuItem = jQuery(containerMenu)[i];
            const containerMenuItemTagLink = jQuery(containerMenuItem).children('a');
            jQuery(containerMenuItemTagLink).prepend(elementToAdd);
        })

    }
}

function mobileAdjustOpeningHours() {
    if (jQuery(window).width() < 600) {
        const containerTopBar = jQuery('body .mobile-menu.mobile-menu_custom .site-header_top-bar .container .row .text-centered .text-small-for-mobile .mb-bhi-display');
        if (jQuery(containerTopBar).hasClass('mb-bhi-open')) {
            jQuery(containerTopBar).children('.mb-bhi-oc-text').text('siamo aperti');
        }
    }
}

function activeMenuFullPageMobile() {
    if (jQuery(window).width() < 600) {
        const buttonToActiveMenu = jQuery(
            "body .mobile-menu.mobile-menu_custom .mobile-logo .container .row .active-menu-full-page_mobile"
        );
        const buttonToCloseMenu = jQuery(
            "body .mobile-menu.mobile-menu_custom .mobile-logo .container .row .close-menu-full-page_mobile"
        );
        console.log('====================================');
        console.log(buttonToActiveMenu, buttonToCloseMenu);
        console.log('====================================');
        /*const containerButton = jQuery(
            "#lc-header .site-header .row-menu.mobile .right-menu-container .right-menu .activator-toggle-menu"
        ); */
        const header = jQuery(".mobile-menu.mobile-menu_custom");
        const footer = jQuery(".site-footer");
        const body = jQuery("body");
        const tl2 = gsap.timeline({
            paused: true,
        });
        tl2.to(".menu-full-page-custom-mnsm", {
            zIndex: 99,
            opacity: 1,
            duration: 0.7,
            ease: "expo.inOut",
        });
        jQuery(buttonToActiveMenu).click(function() {
            tl2.play();
            jQuery(header).addClass("activeMenuFullPageMobile");
            jQuery(footer).addClass("activeMenuFullPageMobile");
            jQuery(body).css("overflow-y", "hidden");
        });
        jQuery(buttonToCloseMenu).click(function() {
            tl2.reverse();
            header.addClass("activeMenuFullPageMobile").removeClass("activeMenuFullPageMobile");
            footer.addClass("activeMenuFullPageMobile").removeClass("activeMenuFullPageMobile");
            body.css("overflow-y", "scroll");
        });
    }
}

function sliderSwiperSingleEvent() {
    var swiper = new Swiper(".swiper.swiper_single_event", {
        direction: 'horizontal',

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
    console.log('====================================');
    console.log(swiper);
    console.log('====================================');

}

function customSlider() {
    const listSingleEvent = jQuery('.container-page-calendar_main-content .col-md-8 .list-complete-event_very>div');
    const listPagination = jQuery('.container-page-calendar_main-content .col-md-8 .swiper-pagination.swiper-pagination-clickable>span');
    for (let index = 0; index < listPagination.length; index++) {
        listPaginationSelected = listPagination[index];
        listSingleEventSelected = listSingleEvent[index]
        listPaginationSelected.append(listSingleEventSelected)

    }
}

jQuery(document).ready(init);