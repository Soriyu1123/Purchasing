$(document).ready(function() {
    // Toggle sub-menu visibility on clicking the sub-btn
    $('.sub-btn').click(function() {
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
    });
});