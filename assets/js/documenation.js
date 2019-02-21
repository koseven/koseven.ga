$(document).ready(function() {
    ul_expandable();
});

function ul_expandable() {
    let parent_ul = $('.doc-nav ul').first();
    $(parent_ul).find('> li').each(function() {
        if ($(this).has('> ul').length) {
            $(this).addClass('expandable');
            $(this).find('ul li').has('ul').each(function () {
               $(this).addClass('expandable');
            });
        }
        if ($(this).has('> a').length === 0) {
            $(this).addClass('cursor-default');
        }
    });
}


$('.doc-nav ul li').click(function (e) {
    e.stopPropagation();
    if ($(this).hasClass('expandable')) {
        $(this).siblings().find('ul').slideUp();
        $(this).find('> ul').slideToggle();
    }
});
