jQuery(document).ready(function ($) {
    var slick_prevArrow = `
		<button type="button" class="slick-prev">
			<span class="visually-hidden">prev</span>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7.828 11H20v2H7.828l5.364 5.364-1.414 1.414L4 12l7.778-7.778 1.414 1.414z"/></svg>
		</button>`;

    var slick_nextArrow = `
		<button type="button" class="slick-next">
			<span class="visually-hidden">next</span>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/></svg>
		</button>`;

    //////////////
    // CHECK IE //
    //////////////
    if (window.document.documentMode) {
        $('body').addClass('is-ie');
    }

    /////////////
    // SELECTS //
    /////////////
    $('select').niceSelect();

    ////////////
    // POPUPS //
    ////////////
    // $('a[data-popup-image]').magnificPopup(
    // {
    // 	type: 'image'
    // });

    var magnificPopupArrowleft = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path fill="none" d="M0 0h24v24H0z"/><path fill="white" d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z"/></g></svg>';
    var magnificPopupArrowRight = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path fill="none" d="M0 0h24v24H0z"/><path fill="white" d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/></g></svg>';

    $('div[data-popup-image-gallery]').magnificPopup(
        {
            type: 'image',
            delegate: '.slick-slide:not(.slick-cloned) a[data-popup-image]',
            closeMarkup: '<button title="%title%" type="button" class="mfp-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg></button>',
            gallery: {
                enabled: true,
                arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%">' + magnificPopupArrowleft + magnificPopupArrowRight + '</button>',
            }
        });

    // $('a[data-popup-frame]').magnificPopup(
    // {
    // 	type: 'iframe'
    // });

    $('body').on('change', '.term-filters select', function (e) {
        var url = $(this).find('option:selected').data('url');
        return window.location = url;
    });

    ///////////////////////
    // SCROLL ANIMATIONS //
    ///////////////////////
    function reveal() {
        var reveals = document.querySelectorAll('.reveal');

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 150;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add('active');
            } else {
                reveals[i].classList.remove('active');
            }
        }
    }
    window.addEventListener('scroll', reveal);
    window.addEventListener('resize', reveal);
    window.addEventListener('load', reveal);

    $('.wp-block-image').addClass('reveal');


    ///////////////////////
    // PORTFOLIO FILTERS //
    ///////////////////////
    if ($('#portfolio').length > 0) {
        var portfolio = new List('portfolio-list', {
            valueNames: [
                'project_type',
                'property_type',
                'portfolio_location',
            ],
        });

        $('body').on('change', '.portfolio-filters select', function () {
            portfolio.filter(function (item) {
                var show = true;
                var filters = {};

                $.each([
                    'project_type',
                    'property_type',
                    'portfolio_location',
                ], function (i, filter_key) {
                    var val = $('select[name="filter_' + filter_key + '"]').find('option:selected').val();

                    if (val != '' && val != 'Show All') {
                        filters[filter_key] = val;
                    }
                });

                if (filters) {
                    $.each(filters, function (filter_key, filter_val) {
                        if ($(item.elm).find('.' + filter_key).text() !== filter_val) {
                            show = false;
                        }
                    });
                }

                return show;
            });

            // TRIGGER REVEAL
            reveal();

            if (portfolio.visibleItems.length == 0) {
                $('#portfolio-list .list').append('<div class="col-12 no-results-found">No results</div>');
            }
        });

        // portfolio.update();
    }



    /////////////
    // JOURNAL //
    /////////////
    if ($('#journal').length > 0) {

        var journal = new List('journal-list', {
            valueNames: [
                'tags',
            ],
        });

        $('body').on('click', '.journal-filters a', function (e) {
            e.preventDefault();

            $('.journal-filters a').removeClass('active');
            $(this).addClass('active');

            var activeFilter = $('.journal-filters a.active').text();

            let show = true;
            let elmTags = [];

            journal.filter(function (item) {
                elmTags = JSON.parse($(item.elm).find('.tags').html());

                if (elmTags.includes(activeFilter)) {
                    show = true;
                } else {
                    show = false;
                }

                return show;
            });

            reveal();
        });
    }


    /////////////////
    // MOBILE MENU //
    /////////////////
    $('ul#mobile > li.menu-item-has-children').append('<span class="toggle"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg></span></span>');
    $('body').on('click', 'ul#mobile > li.menu-item-has-children > .toggle', function (e) {
        e.preventDefault();

        if (!$(this).parents('li.menu-item-has-children').hasClass('current-menu-active')) {
            $(this).parents('li.menu-item-has-children').removeClass('current-menu-inactive')
            $(this).parents('li.menu-item-has-children').addClass('current-menu-active')
        } else {
            $(this).parents('li.menu-item-has-children').removeClass('current-menu-active')
            $(this).parents('li.menu-item-has-children').addClass('current-menu-inactive')
        }
    });

    /////////////////
    // HOME BANNER //
    /////////////////
    if ($('.banner--home').length > 0) {
        $('.banner--home').slick({
            arrows: false,
            dots: true,
            fade: true,
            speed: 2000,
            autoplay: true,
            autoplaySpeed: 8000
        });
    }
});