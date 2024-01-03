function init() {
    branding();
    activeMenuFullPage();
    customMenuFullPage();
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
    /* const buttonToCloseMenu = jQuery(
        "#lc-header .site-header .row-menu.mobile .right-menu-container .right-menu .activator-toggle-menu .closeMenu"
    );
    const containerButton = jQuery(
        "#lc-header .site-header .row-menu.mobile .right-menu-container .right-menu .activator-toggle-menu"
    ); */
    const header = jQuery(".site-header");
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
        jQuery(header).addClass("activeMenuFullPage");
        jQuery(footer).addClass("activeMenuFullPage");
        jQuery(body).css("overflow-y", "hidden");
    });
    /* jQuery(buttonToCloseMenu).click(function() {
        tl2.reverse();
        header.addClass("activeMenuFullPage").removeClass("activeMenuFullPage");
        footer.addClass("activeMenuFullPage").removeClass("activeMenuFullPage");
        body.css("overflow-y", "scroll");
    }); */
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

jQuery(document).ready(init);