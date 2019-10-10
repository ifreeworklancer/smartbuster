import jquery from 'jquery';
import Flickity from 'flickity';
import ScrollReveal from 'scrollreveal';
import IMask from 'imask';

window.jQuery = window.$ = jquery;

(function () {

    /**
     * Burger-menu
     */
    let menu = $('.menu');
    let menuMask = $('.menu-mask');
    let burgerMenu = $('.burger-menu');
    $(burgerMenu).click(function () {
        $(this).toggleClass('active');
        menuMask.toggleClass('active');
        menu.toggleClass('active');
    });

    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 0) {
            $('#app-header').addClass('is-scroll');
        } else {
            $('#app-header').removeClass('is-scroll');
        }
        burgerMenu.removeClass('active');
        menu.removeClass('active');
        menuMask.removeClass('active');
    });

    /**
     * Scroll
     */
    $(".scroll-link").on("click", function (event) {
        event.preventDefault();
        let id = $(this).attr('href');
        if (id.length > 1) {
            let top = ($(id).offset().top - $('#app-header').outerHeight());

            $('body,html').animate({
                scrollTop: top
            }, 1500);
        }
        burgerMenu.removeClass('active');
        menu.removeClass('active');
        menuMask.removeClass('active');
    });

    menuMask.on('click', function () {
        burgerMenu.removeClass('active');
        menu.removeClass('active');
        menuMask.removeClass('active');
    });

    /**
     * Form-label
     */

    $('.form-control').on('focus', function () {
        $(this).parents('.form-group').addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        if ($(this).val() !== "") {
            $(this).parents('.form-group').addClass('in-focus');
        } else {
            $(this).parents('.form-group').removeClass('in-focus');
        }
    });

    /**
     * Phone mask
     * @type {*|jQuery.fn.init|jQuery|HTMLElement}
     */
    const phones = $('[type="tel"]');
    Array.from(phones).forEach(phone => {
        new IMask(phone, {
            mask: '+{38} (000) 000-00-00'
        });
    });

    /**
     * Modal
     */
    let orderModal = $('.custom-modal--order');
    let closeModal = $('.close-modal');
    let modalMask = $('.modal-mask');

    $('.open-order').on('click', function (e) {
        e.preventDefault();
        $(orderModal).addClass('active');
        $(modalMask).addClass('active');
    });

    $(closeModal).on('click', function () {
        $(orderModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    $(modalMask).on('click', function () {
        $(orderModal).removeClass('active');
        $(modalMask).removeClass('active');
    });


    /**
     * Youtube video
     */
    $('[data-youtube]').on('click', function () {
        let id = $(this).data('youtube'),
            padding = $(window).innerWidth() > 768 ? 120 : 30,
            ratio = 9 / 16,
            width = $(window).innerWidth() > 768 ? $(window).innerWidth() - padding - 200 : $(window).innerWidth() - padding,
            height = width * ratio,
            html = '<iframe style="width: ' + width + 'px; height: ' + height + 'px;" ' +
                'src="' +
                id + '" frameborder="0" gesture="media" allowfullscreen></iframe>';
        console.log(height);

        $('body').append('<div class="outer">' + html + '</div>');
    });

    $(document).mouseup(function (e) {
        let container = $('.outer iframe');

        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.outer').remove();
        }
    });

    $(document).on('keyup', function (e) {
        if (e.keyCode === 27) {
            if ($(feedbackModal).lenght > 0) {
                $(feedbackModal).removeClass('active');
                $(modalMask).removeClass('active');
            }
        }
    });

    /**
     * Tabs
     */

    $('.feature-gallery .custom-tabs-nav-item').eq(0).addClass('active');
    $('.feature-gallery .custom-tabs-body-item').eq(0).addClass('active');

    $('.reviews-item .custom-tabs-nav-item').eq(0).addClass('active');
    $('.reviews-item .custom-tabs-body-item').eq(0).addClass('active');
    let reviewsTabsHeight = $('.reviews-item .custom-tabs-body-item.active .reviews-description').outerHeight();
    $('.reviews-item .custom-tabs-body').css('height', `${reviewsTabsHeight}px`);

    $('.custom-tabs-nav').on('click', 'div:not(.active)', function () {
        $(this)
            .addClass('active').siblings().removeClass('active')
            .closest('.custom-tabs').find('.custom-tabs-body-item').removeClass('active').eq($(this).index()).addClass('active');
        let height = $(this).siblings().closest('.custom-tabs').find('.custom-tabs-body-item').eq($(this).index()).find('.reviews-description').outerHeight();
        console.log(height)
        $('.reviews-item .custom-tabs-body').css('height', `${height}px`);
    });

    /**
     * Sliders
     */
    if ($('.about-slider')) {

        let elem1 = document.querySelector('.about-slider');
        if (elem1) {
            const flkty1 = new Flickity(elem1, {
                prevNextButtons: false,
                pageDots: false,
                contain: true,
                draggable: false,
                wrapAround: false,
                cellAlign: 'left',
                cellSelector: '.about-slider-item'
            });

            let prevArrowAbout = document.querySelector('.slider-arrow--about .slider-arrow-item--prev');

            prevArrowAbout.addEventListener('click', function () {
                flkty1.previous(false, false);
            });

            let nextArrowAbout = document.querySelector('.slider-arrow--about .slider-arrow-item--next');

            nextArrowAbout.addEventListener('click', function () {
                flkty1.next(false, false);
            });
        }
    }

    /**
     * Custom dropdown
     * @type {Element}
     */
    let dropDown = document.querySelector('.custom-dropdown-input');
    let dropDownBody = document.querySelector('.custom-dropdown-body');

    $(dropDown).on('click', function () {
        $(this).toggleClass('active');
        $(dropDownBody).slideToggle();
    });

    if (dropDown) {
        $(document).on('click', e => {
            if (!(dropDown === e.target || dropDown.contains(e.target))) {
                $(dropDown).removeClass('active');
                $(dropDownBody).slideUp();
            }
        });
    }

    /**
     * Animate scroll
     */
    ScrollReveal().reveal('.intro-item', {
        origin: 'left',
        delay: 400,
        distance: '300px',
    });
    ScrollReveal().reveal('.intro-image', {
        origin: 'right',
        delay: 400,
        distance: '300px',
    });
    ScrollReveal().reveal('.about-item', {
        origin: 'bottom',
        delay: 400,
        distance: '300px',
    });
    ScrollReveal().reveal('.advantages-list li', {
        origin: 'bottom',
        delay: 400,
        distance: '300px',
        interval: 80
    });
    ScrollReveal().reveal('.included-item', {
        origin: 'left',
        delay: 400,
        distance: '300px',
        interval: 80
    });
    ScrollReveal().reveal('.feature-order', {
        origin: 'right',
        delay: 400,
        distance: '300px',
        interval: 80
    });
})(jQuery);