$(document).ready(function() {
    $(".close-icon").click(function() {
        $(this).parent().next().slideUp();
        $(this).parent().slideUp();
    });
});