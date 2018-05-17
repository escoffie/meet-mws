$ = jQuery.noConflict();

$(document).ready(function(){

    var navHeader = $('nav.header-menu');
    var breakpoint = 768;

    $('.header-menu-switch a').on('click', function() {
        navHeader.toggle('slow');
    });

    // Resize window and toggle menu

    $(window).resize(function(){
        if($(document).width() >= breakpoint) {
            navHeader.show();
        } else {
            navHeader.hide();
        }
    });
});