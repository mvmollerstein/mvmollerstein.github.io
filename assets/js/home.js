$(document).ready(function(){

    // Defining a function to set size for #home-hero
    function homeIntro(){
        var navHeight = $("#nav").height();
        var navMargin = $("#nav").outerHeight(true) -  $("#nav").height();
        jQuery('#home-hero').css({
            height: jQuery(window).height() - navHeight - (navMargin*3)
        });
    }

    homeIntro();

    // Run the function in case of window resize
    jQuery(window).resize(function() {
        homeIntro();
    });

    jQuery('.home-selectedprojects').click(function(e){
        var navMargin = $("#nav").outerHeight(true) -  $("#nav").height();
        var jump = $(this).attr('href');
        var new_position = $(jump).offset();
        $('html, body').stop().animate({ scrollTop: new_position.top - navMargin}, 800);
        e.preventDefault();
    });
  
  });