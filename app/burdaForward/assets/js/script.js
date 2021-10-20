$(document).ready(function() {
    $(".close-icon").click(function() {
        $(this).parent().next().slideUp();
        $(this).parent().slideUp();
        $("#interstitial-overlay").hide();
    });
});


/**
 * Sticky Header Banner @index.php
 */

function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky-anchor').offset().top;
    if (window_top > div_top) {
        $('#header-banner-sticky').addClass('sticky');
        $('#sticky-anchor').css('margin-bottom', '100px'); }
    else {
        $('#header-banner-sticky').removeClass('sticky');
        $('#sticky-anchor').css('margin-bottom', '0px');
    }
}

$(function() {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
});