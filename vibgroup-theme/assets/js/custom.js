jQuery(document).ready(function () {
    console.log("JS file initialized");

    // script for open burger menu
    
    jQuery('.header-burger-menu').on('click', function(){
        jQuery('.header-burger-menu').toggleClass('active');
        jQuery('div#header-main-wrapper').toggleClass('burger-active');
        jQuery('.header-sidebar-wrapper').toggleClass('active');
        jQuery('html').toggleClass('no-scroll');
    })
    console.log('burger script loaded');

    // script for add custom padding on first section of every page with first section class
    let headerHeight = jQuery('.header-main-wrapper').outerHeight();
    let windowsSize = jQuery('html').width();
    if(windowsSize > 980){
        let paddingTopFirstSection = headerHeight + 80;
        jQuery('.first-section').css('padding-top', paddingTopFirstSection + 'px');
    } else {
        let paddingTopFirstSection = headerHeight + 60;
        jQuery('.first-section').css('padding-top', paddingTopFirstSection + 'px');
    }
    console.log('first section script loaded');



    
    console.log("JS execution completed");
});
