$(document).ready(function () {

    let isMobile = () => window.matchMedia('(max-width: 767.98px)').matches;

    /* ----- Vue.js Applications START ----- */
    let app = new Vue({
        /***
         Example cart item
         {
            id: 3,
            title: 'Столешница',
            price: 400,
            count: 1,
            img: 'img/temp/1.png',
         }
         */
        el: '#js-vue-content',
        data: {
            total_count: 0,
            total_price: 0,
            cart: []
        },
        methods: {
            update_item_count(item_id, is_plus) {
                /***
                 * Изменят кол-во заданного товара
                 * @param {number} item_id - id товара, кол-во которого нужно обновить
                 * @param {boolean} is_plus - увеличивает кол-во на 1, если истинно и наоборот
                 * @returns {boolean} - true, если товар найден и изменен, и false, если этого товара нет в корзине
                 */
                item_id = parseInt(item_id);
                let number_to_plus = 1;
                if (!is_plus) {
                    number_to_plus = -1;
                }

                for (let idx in this.cart) {
                    if (this.cart[idx].id === item_id) {
                        this.cart[idx].count = this.cart[idx].count + number_to_plus;

                        if (this.cart[idx].count <= 0) {
                            Vue.delete(this.cart, idx)
                        }
                        this.update_total_info();
                        return true;
                    }
                }

                return false;
            },
            delete_item(item_id) {
                /***
                 * Изменят кол-во заданного товара
                 * @param {number} item_id - id товара для удаления
                 * @returns {boolean} - true, если товар найден и удален, и false, если этого товара нет в корзине
                 */

                for (let idx in this.cart) {
                    if (this.cart[idx].id === item_id) {
                        Vue.delete(this.cart, idx);
                        this.update_total_info();
                        return true;
                    }
                }

                return false;
            },
            add_to_cart(array) {
                this.cart.push({
                    id: parseInt(array[0]),
                    title: array[1],
                    price: parseInt(array[2]),
                    count: parseInt(array[3]),
                    img: array[4],
                });

                this.update_total_info();
            },
            update_total_info() {
                this.total_count = 0;
                this.total_price = 0;
                for (let idx in this.cart) {
                    this.total_count += this.cart[idx].count;
                    this.total_price += this.cart[idx].count * this.cart[idx].price;
                }
            }
        }
    });
    let navbarApp = new Vue({
        el: '#navbar',
        data: {
            is_open: false,
            is_mobile: isMobile(),
        },
        methods: {
            toggleNavbar() {
                this.is_open = !this.is_open;
            }

        }
    });

    app.update_total_info();
    $('#navbar a').on('click', function () {
        navbarApp.is_open = false
    });
    /* ----- Vue.js Applications END ----- */


    /* ----- Smooth scroll by id links START ----- */
    $('a[href^="#"]').on('click', function () {
        let href = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(href).offset().top - 80
        }, 1000);
    });
    /* ----- Smooth scroll by id links END ----- */


    /* ----- Constructor kinds changer START ----- */
    function change_constructor_list_2(bool_show) {
        let $constructor_list_2 = $('.constructor__list-2');

        if (bool_show) {
            $constructor_list_2.addClass('constructor__list--show');
            is_show_list_2 = true;
        } else {
            $constructor_list_2.removeClass('constructor__list--show');
            is_show_list_2 = false;
        }
    }

    function change_constructor_list_3(bool_show) {
        let $constructor_list_3 = $('.constructor__list-3');

        if (bool_show) {
            $constructor_list_3.addClass('constructor__list--show');
            is_show_list_3 = true;
        } else {
            $constructor_list_3.removeClass('constructor__list--show');
            is_show_list_3 = false;
        }
    }

    let is_show_list_2 = false;
    let is_show_list_3 = false;

    $('.js-type-1').on('click', function () {
        let timeout = 0;
        if (isMobile()) {
            timeout += 1000
        }

        window.setTimeout(function () {
            change_constructor_list_2(false);
            change_constructor_list_3(false);
        }, timeout);
    });
    $('.js-type-2').on('click', function () {
        let timeout = 0;
        if (isMobile()) {
            timeout += 1000
        }

        window.setTimeout(function () {
            if (is_show_list_3) {
                change_constructor_list_3(false);
            } else if (is_show_list_2) {
                change_constructor_list_2(false);
            } else {
                change_constructor_list_2(true);
            }
        }, timeout);
    });
    $('.js-type-3').on('click', function () {
        let timeout = 0;
        if (isMobile()) {
            timeout += 1000
        }

        window.setTimeout(function () {
            if (is_show_list_2 && !is_show_list_3) {
                change_constructor_list_3(true);
            } else if (!is_show_list_2 && !is_show_list_3) {
                change_constructor_list_2(true);
                change_constructor_list_3(true);
            } else if (is_show_list_3) {
                change_constructor_list_2(true);
                change_constructor_list_3(false);
            } else {
                change_constructor_list_3(false);
            }
        }, timeout);
    });

    $('.js-section-btn').on('click', function () {
        if (!isMobile()) {
            $('html, body').animate({
                scrollTop: $('#constructor-types').offset().top
            }, 1000);
        } else {
            $('html, body').animate({
                scrollTop: $('#constructor-items').offset().top
            }, 1000);
        }
    });
    /* ----- Constructor kinds changer END ----- */


    /* ----- Modals listeners START ----- */
    $('#constructor-modal').on('shown.bs.modal', function (e) {
        $('.js-modal-slick').slick('refresh');
        $('.js-modal-slick-mini').slick('refresh');

        $('.constructor-item-preloader').hide();
        $('.modal-constructor__wrapper').show();
    });

    $('.js-constructor__item').on('click', function (e) {
        $('.js-modal-slick').not('.slick-initialized').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: '.js-modal-slick-mini',
            infinite: false,
            arrows: false
        });
        $('.js-modal-slick-mini').not('.slick-initialized').slick({
            infinite: false,
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: true,
            asNavFor: '.js-modal-slick',
            draggable: false,
            centerMode: true,
            focusOnSelect: true,
            prevArrow: '<div type="button" class="modal-slick-arrow modal-slick-arrow--left"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
            nextArrow: '<div type="button" class="modal-slick-arrow modal-slick-arrow--right"><i class="fa fa-angle-right" aria-hidden="true"></i></div>',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                },
            ]
        });
        $('#constructor-modal').modal('show');
    });

    $('.js-cart-btn').on('click', function () {
        $('#cart-modal').modal('show');
    });

    $('#cart-modal').on({
        'hidden.bs.modal': function () {
            if (app.total_count > 0) {
                $('.js-cart-btn').css('display', 'block');
                window.setTimeout(function () {
                    $('.js-cart-btn').css('opacity', '1');
                }, 500);
            }
        },
        'shown.bs.modal': function () {
            $('.js-cart-btn').css('opacity', '0');
            window.setTimeout(function () {
                $('.js-cart-btn').css('display', 'none');
            }, 400);
        }
    });

    $('.js-add-to-cart').on('click', function (event) {
        let data_obj = $(event.currentTarget).parent().serializeArray(),
            item_id = data_obj[0]['value'];

        if (!app.update_item_count(item_id, true)) {
            let data = [];
            for (let key in data_obj) {
                data.push(data_obj[key]['value']);
            }
            app.add_to_cart(data);
        }

        $('#constructor-modal').modal('hide');

        $('.js-cart-btn').css('display', 'block');
        window.setTimeout(function () {
            $('.js-cart-btn').css('opacity', '1');
        }, 500);
    });
    /* ----- Modals listeners END ----- */


    /* ----- Owl slider START ----- */
    $('.constructor-carousel').owlCarousel({
        loop: false,
        margin: 30,
        nav: true,
        dots: false,
        navText: [
            '<div class="constructor__arrow constructor__arrow--left"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>',
            '<div class="constructor__arrow constructor__arrow--right"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>'
        ],
        responsive: {
            0: {items: 1},
            768: {items: 2},
            1200: {items: 4}
        }
    });
    // autoplay: true,
    //     autoplayTimeout: 2000,
    //     autoplayHoverPause: true,
    $('.js-partners-carousel').owlCarousel({
        loop: true,
        margin: 150,
        nav: true,
        items: 2,
        autoWidth: true,
        navText: [
            "<div class='partners__arrow partners__arrow--prev'><i class='fa fa-chevron-left'></i></div>",
            "<div class='partners__arrow partners__arrow--next'><i class='fa fa-chevron-right'></i></div>"
        ],
        responsive: {
            0: {
                autoWidth: false,
                items: 1,
                margin: 0
            },
            768: {autoWidth: true}
        }
    });
    /* ----- Owl slider END ----- */

    $('body').on('wheel', function (event) {
        // console.log(event.originalEvent.wheelDelta);
        console.log('test')
    });
});