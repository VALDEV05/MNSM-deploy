function init() {
    branding();
    activeMenuFullPage();
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
    const header = jQuery("#lc-header");
    const footer = jQuery("#lc-footer");
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
        header.addClass("active");
        footer.addClass("active");
        body.css("overflow-y", "hidden");
    });
    /* jQuery(buttonToCloseMenu).click(function() {
        tl2.reverse();
        header.addClass("active").removeClass("active");
        footer.addClass("active").removeClass("active");
        body.css("overflow-y", "scroll");
    }); */
}


jQuery(document).ready(init);