require('./bootstrap');
require('../../node_modules/jquery/dist/jquery.min.js');

// initialise default item view panel
$(".view-panel-container .view-panel").first().addClass('active');

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
    // activate corresponding view panel
    var val = $(this).attr("for");
    $(".view-panel").each(function() {
        $(this).removeClass("active");
        if($(this).attr("for") === val)
        {
            $(this).addClass("active");
        }
    });
});

// active state functionality for view panels
$(".view-panel").on("click", function() {
    $(".view-panel").each(function() {
        $(this).removeClass("active");
    });
    $(this).addClass("active");
});