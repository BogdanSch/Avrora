/*-autoHeight-*/
(function (jQuery) {
    jQuery.fn.childrenAutoHeight = function (options) {
        var settings = jQuery.extend({ nameBoxHeight: '', windResize: false }, options);
        var thisTag = jQuery(this);
        jQuery(window).load(function () {
            thisTag.each(function () {
                var maxHeight = [];
                jQuery(this).find(settings.nameBoxHeight).each(function () {
                    maxHeight.push(jQuery(this).height());
                }).height(Math.max.apply(0, maxHeight));
            });
        });
        if (options.windResize == true) {
            jQuery(window).resize(function () {
                thisTag.css({height: ''});
                thisTag.each(function () {
                    var maxHeight = [];
                    jQuery(this).find(settings.nameBoxHeight).each(function () {
                        maxHeight.push(jQuery(this).height());
                    }).height(Math.max.apply(0, maxHeight));
                });
            });
        }
    };
})(jQuery);
/*-mobile-menu-*/
(function (jQuery) {
    jQuery.fn.mobileMenu = function (options) {
        var options = jQuery.extend({includeAt: '800', effect: 'fade', toCloseText: '-', toOpenText: '+', duration: '300'}, options);
        this.after('<div class="mobile-menu"><span class="button">' + options.toOpenText + '</span>' + jQuery(this).html() + '</div>');
        jQuery('.mobile-menu .button').on('click', function () {
            jQuery(this).parent().toggleClass('open');
            if (jQuery(this).parent().hasClass('open')) {
                jQuery(this).html(options.toCloseText);
                if (options.effect + '' == 'fade') {
                    jQuery(this).next('ul').fadeIn(parseInt(options.duration));
                } else if (options.effect + '' == 'slide') {
                    jQuery(this).next('ul').slideDown(parseInt(options.duration));
                } else {
                    jQuery(this).next('ul').show();
                }
            } else {
                jQuery(this).html(options.toOpenText);
                if (options.effect + '' == 'fade') {
                    jQuery(this).next('ul').stop(true, true).fadeOut(parseInt(options.duration));
                } else if (options.effect + '' == 'slide') {
                    jQuery(this).next('ul').stop(true, true).slideUp(parseInt(options.duration));
                } else {
                    jQuery(this).next('ul').hide();
                }
            }
        });
        jQuery(document).click(function (event) {
            if (jQuery(event.target).closest(".mobile-menu").length) return;
            jQuery(this).html(options.toCloseText);
            jQuery('.mobile-menu .button').html(options.toOpenText);
            if (options.effect + '' == 'fade') {
                jQuery('.mobile-menu .button').next('ul').stop(true, true).fadeOut(parseInt(options.duration));
            } else if (options.effect + '' == 'slide') {
                jQuery('.mobile-menu .button').next('ul').stop(true, true).slideUp(parseInt(options.duration));
            } else {
                jQuery('.mobile-menu .button').next('ul').hide();
            }
            jQuery('.mobile-menu').removeClass('open');
            event.stopPropagation();
        });
        jQuery('head').append('<style type="text/css"> .mobile-menu, .mobile-menu ul{display:none;} .mobile-menu .button{display:none; cursor:pointer; -moz-user-select: -moz-none; -o-user-select: none; -khtml-user-select: none; -webkit-user-select: none; user-select: none;} @media only screen and (max-width: ' + parseInt(options.includeAt) + 'px){ .' + jQuery(this).attr("class") + '{display: none;} .mobile-menu, .mobile-menu .button{display:block;}}</style>');
    };
})(jQuery);


jQuery(document).ready(function () {

    jQuery('.header .main-menu, .header .menu>ul').mobileMenu({
        includeAt: 600,
        effect: 'slide',
        toCloseText: 'MENU',
        toOpenText: 'MENU',
        duration: 120
    });

    jQuery('.news .box-news:nth-child(5n)').addClass('p2');
    jQuery('.news.infos .box-news:nth-child(3n)').addClass('p2');
    jQuery('body').css({paddingBottom: jQuery('.footer').outerHeight(), minHeight: jQuery(window).height() - jQuery('.footer').outerHeight()});

});

 /*jQuery(window).scroll(function(){
    var sticky =  jQuery('.header'),
        scroll =  jQuery(window).scrollTop();

    if (scroll >= 120) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
});*/
jQuery("header").before(jQuery("header").clone().addClass("fixed"));
jQuery(window).on("scroll", function () {
    jQuery("body").toggleClass("down", (jQuery(window).scrollTop() > 160));
});

// clear cf7 error msg on mouseover
jQuery(".wpcf7-form-control-wrap").mouseover(function(){
    jQueryobj = jQuery("span.wpcf7-not-valid-tip",this);
    jQueryobj.css('display','none');
});

jQuery(window).load(function () {
    jQuery('body').css({paddingBottom: jQuery('.footer').outerHeight(), minHeight: jQuery(window).height() - jQuery('.footer').outerHeight()});
});
jQuery(window).resize(function () {
    jQuery('body').css({paddingBottom: jQuery('.footer').outerHeight(), minHeight: jQuery(window).height() - jQuery('.footer').outerHeight()});
});

jQuery(window).load(function() {
    jQuery('.flexslider').flexslider({
        animation: "slide"
    });
});