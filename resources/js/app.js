require('./bootstrap');
require('../../node_modules/jquery/dist/jquery.min.js');

// active state functionality for item list items
$(".item-list .item").on("click", function() {
    $(".item-list .item").each(function() {
        $(this).removeClass("active")
    });
    $(this).addClass("active");
});

// active state functionality for menu items
$(".menu-bar li").on("click", function() {
    $(".menu-bar li").each(function() {
        $(this).removeClass("active");
    });
    $(this).addClass("active");
});