$(function() {

    $('#ac_menu-btn').click( function () {
        $('#main-menu').addClass('open');
    });

    $('.main-menu__close').click( function () {
        $('#main-menu').removeClass('open');
    })

    $('.fin-table__informer').click(function () {

        var obj = $(this).parents('.fin-table');
        var container = obj.find('.fin-table__content').eq(0);
        var scroll_end = obj.find('table').eq(0).width() - container.width();
        var current_scroll = container.scrollLeft();

        if(current_scroll<10) {
            container.animate({ scrollLeft: scroll_end}, 250);
        }
        else {
            container.animate({ scrollLeft: 0}, 250);
        }
    });


    markScrollableTables();


});

function markScrollableTables() {
    var list = $('.fin-table');
    list.each(function (index) {
       var container_width = $(this).find('.fin-table__content').eq(0).width();
       var table_width = $(this).find('table').eq(0).width();
       if(table_width>container_width) {
           $(this).find('.fin-table__informer').fadeIn().css("display","inline-block");
           $(this).find('table').addClass('table_large');
       }
    });
}