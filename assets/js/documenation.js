$(document).ready(function() {
    ul_expandable();
    smooth_scroll();

    // Smooth scroll on load if not done by default
    if (window.location.hash) {
        setTimeout(function () {
            var hash = window.location.hash;
            if (Math.round($("html").scrollTop()) !== Math.round($(hash).offset().top)) {
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800);
            }
        }, 300);
    }

    let apiSearch = '#kodoc-api-filter-box';
    if ($(apiSearch).length)
    {
        $(apiSearch).api_filter('.api.content-section').focus();
    }
});

function ul_expandable() {
    let parent_ul = $('.content-nav ul').first();
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

function smooth_scroll() {
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
}


$('.content-nav ul li').click(function (e) {
    e.stopPropagation();
    if ($(this).hasClass('expandable')) {
        $(this).siblings().find('ul').slideUp();
        $(this).find('> ul').slideToggle();
    }
});


(function($) {
    $.fn.extend({
        api_filter: function(api_container_selector){
            var $api_container = $(api_container_selector);
            var $this = this;

            if ($api_container.length) {
                var $classes = $('.class', $api_container);
                var $methods = $('.methods li', $classes);
                var text = $methods.map(function(){ return $(this).text(); });
                var timeout = null;

                this.keyup(function(){
                    clearTimeout(timeout);
                    timeout = setTimeout(filter_content, 300);
                });

                filter_content();
            }

            function filter_content(){
                var search = $this.val();
                var search_regex = new RegExp(search,'gi');

                if (search === '') {
                    $methods.show();
                    $classes.show();
                } else {
                    $classes.hide();
                    $methods.hide();

                    text.each(function(i){
                        if (this.match(search_regex)) {
                            $($methods[i]).show().closest('.class').show();
                        }
                    });
                }
            }

            return this;
        }
    });
})(jQuery);
