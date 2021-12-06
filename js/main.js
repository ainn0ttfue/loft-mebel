$(document).ready(function () {
    let app = new Vue({
        el: '#vue-content',
        data: {
            total_count: 0,
            total_price: 0,
            cart: [
                {
                    id: 1,
                    title: 'Столешница с прямоугольным вырезом (шоколадная)',
                    price: 400,
                    count: 1,
                    img: 'img/temp/1.png',
                },
                {
                    id: 2,
                    title: 'Подстолье с электрорегулировкой',
                    price: 500,
                    count: 1,
                    img: 'img/temp/2.png',
                },
                {
                    id: 3,
                    title: 'Столешница',
                    price: 400,
                    count: 1,
                    img: 'img/temp/1.png',
                },
                {
                    id: 3,
                    title: 'Столешница',
                    price: 400,
                    count: 1,
                    img: 'img/temp/1.png',
                },
                {
                    id: 3,
                    title: 'Столешница',
                    price: 400,
                    count: 1,
                    img: 'img/temp/1.png',
                },
                {
                    id: 2,
                    title: 'Подстолье с электрорегулировкой',
                    price: 500,
                    count: 1,
                    img: 'img/temp/2.png',
                },
                {
                    id: 3,
                    title: 'Столешница',
                    price: 400,
                    count: 1,
                    img: 'img/temp/1.png',
                },
            ]
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

    app.update_total_info();

    /* ----- Smooth scroll by id links START ----- */
    $('a[href^="#"]').on('click', function () {
        let href = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(href).offset().top
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
        change_constructor_list_2(false);
        change_constructor_list_3(false);
    });
    $('.js-type-2').on('click', function () {
        if (is_show_list_3) {
            change_constructor_list_3(false);
        } else if (is_show_list_2) {
            change_constructor_list_2(false);
        } else {
            change_constructor_list_2(true);
        }
    });
    $('.js-type-3').on('click', function () {
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
    });
    /* ----- Constructor kinds changer END ----- */


    $('.constructor-carousel').owlCarousel({
        loop: false,
        margin: 30,
        nav: true,
        items: 4,
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

    $('#constructor-modal').on('shown.bs.modal', function (e) {
        $('.js-modal-slick').slick('refresh');
        $('.js-modal-slick-mini').slick('refresh');
    });

    $('.js-constructor__item').on('click', function (event) {
        $('#constructor-modal').modal('show');
        $('.js-modal-slick').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            // fade: true,
            asNavFor: '.js-modal-slick-mini',
            infinite: false,
            arrows: false
        });
        $('.js-modal-slick-mini').slick({
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
    });

    $('.js-add-to-cart').on('click', function (event) {
        let data_obj = $(event.currentTarget).parent().serializeArray();

        let item_id = data_obj[0]['value'];

        if (!app.update_item_count(item_id, true)) {
            let data = [];
            for (let key in data_obj) {
                data.push(data_obj[key]['value']);
            }
            app.add_to_cart(data);
        }

        $('#constructor-modal').modal('hide');
    });

    $('.js-cart-btn').on('click', function () {
        $('#cart-modal').modal('show');
    });

    $('#cart-modal').on({
        'hidden.bs.modal': function() {
            $('.js-cart-btn').css({'display': 'block'});
        },
        'show.bs.modal': function() {
            $('.js-cart-btn').css({'display': 'none'});
        }
    });
});