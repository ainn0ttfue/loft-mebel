<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <? $APPLICATION->ShowHead(); ?>
  <title><? $APPLICATION->ShowTitle() ?></title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">

  <!-- Fontawesome CSS -->
  <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/lib/fontawesome/css/font-awesome.min.css"); ?>

  <!-- Bootstrap -->
  <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/lib/bootstrap-4/bootstrap.min.css"); ?>

  <!-- Owl Slider -->
  <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/lib/owl-slider/owl.carousel.min.css"); ?>
  <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/lib/owl-slider/owl.theme.default.min.css"); ?>

  <!-- Slick Slider -->
  <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/lib/slick-slider/slick.css"); ?>
  <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/lib/slick-slider/slick-theme.css"); ?>

  <!-- Slick Slider -->
  <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/lib/jquery.fancybox.min.css"); ?>

  <!-- Main CSS -->
  <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/styles.css"); ?>
</head>

<body>
<div id="panel">
  <? $APPLICATION->ShowPanel(); ?>
</div>

<!-- Fixed Navbar-->
<nav class="nav fixed-top" id="navbar">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1 col-xl-3 d-flex justify-content-between d-md-block align-items-center">
        <div class="navbar-btn d-inline-block d-md-none" v-on:click="toggleNavbar">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <a href="#header"><img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.png" alt="Логотип" class="nav__logo"></a>
        <a href="#header" class="navbar-btn d-inline-block d-md-none">
          <i class="fa fa-home" aria-hidden="true"></i>
        </a>
      </div>

      <div class="col-md-6 col-xl-4 offset-xl-1 text-center" v-show="is_open || !is_mobile">
        <div class="navigation d-flex flex-column flex-md-row justify-content-center h-100 align-items-center">
          <div class="navigation__item"><a href="#header" class="link link--bold">Главная</a></div>
          <div class="navigation__item"><a href="#constructor" class="link link--bold">Конструктор</a></div>
          <div class="navigation__item"><a href="#partners" class="link link--bold">Партнеры</a></div>
          <div class="navigation__item"><a href="#contacts" class="link link--bold">Контакты</a></div>
        </div>
      </div>

      <div class="col-md-5 col-xl-4" v-show="is_open || !is_mobile">
        <div class="nav__contacts d-flex flex-column flex-md-row justify-content-around h-100 align-items-center">
          <div class="d-flex flex-column flex-lg-row justify-content-between">
            <a href="tel:89140003787" class="link mr-md-4">+7 (914) 000-37-87</a>
            <a href="mailto:sale@loft-mebel.shop" class="link">sale@loft-mebel.shop</a>
          </div>
          <a href="#contacts" class="button">Контакты</a>
        </div>
      </div>
    </div>
  </div>
</nav>

<!-- Header -->
<header id="header" class="header text-center jarallax" data-jarallax data-speed="0.2">
  <img src="<?= SITE_TEMPLATE_PATH ?>/img/bg/1.jpg" alt="Столяр" class="jarallax-img">

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="header__content d-flex flex-column justify-content-center">
          <h1 class="header__title">
            LOFT MEBEL
          </h1>
          <p class="header__desc">
            Делаем качественную и удобную мебель для Вас
          </p>
        </div>

        <a class="header__arrow" href="#section-1">
          <svg class="t-cover__arrow-svg" x="0px" y="0px" width="38.417px" height="18.592px"
               viewBox="0 0 38.417 18.592">
            <g>
              <path d="M19.208,18.592c-0.241,0-0.483-0.087-0.673-0.261L0.327,1.74c-0.408-0.372-0.438-1.004-0.066-1.413c0.372-0.409,1.004-0.439,1.413-0.066L19.208,16.24L36.743,0.261c0.411-0.372,1.042-0.342,1.413,0.066c0.372,0.408,0.343,1.041-0.065,1.413L19.881,18.332C19.691,18.505,19.449,18.592,19.208,18.592z"></path>
            </g>
          </svg>
        </a>
      </div>
    </div>
  </div>
</header>

<!-- Изготовление ЛОФТ мебели в Иркутске -->
<section id="section-1" class="section text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section__title">
          Изготовление ЛОФТ мебели в Иркутске
        </h2>

        <p class="section__text section__text_fixed-width">
          Индивидуальное производство столов любой сложности для дома и офиса
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Собрать свой стол -->
<section class="section text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section__title">
          Собрать свой стол
        </h2>

        <p class="section__text section__text_fixed-width">
          Большой ассортимент образцов подстолий и столешниц для изготовления
        </p>

        <div class="table-sequence d-flex flex-column flex-md-row justify-content-around align-items-center">
          <div class="table-sequence__item">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/1_1.png" alt="Столешница" class="table-sequence__img">
            <p class="table-sequence__text">Выберите столешницу</p>
          </div>

          <div class="table-sequence__arrow">
            <svg width="44" stroke="#000000" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.7 18.7">
              <path class="st0" d="M.1 9.4h23"></path>
              <path class="st1" d="M14.1 18.4l9-9-9-9"></path>
            </svg>
          </div>

          <div class="table-sequence__item">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/1_2.png" alt="Подстолье" class="table-sequence__img">
            <p class="table-sequence__text">Выбрать подстолье</p>
          </div>

          <div class="table-sequence__arrow">
            <svg width="44" stroke="#000000" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.7 18.7">
              <path class="st0" d="M.1 9.4h23"></path>
              <path class="st1" d="M14.1 18.4l9-9-9-9"></path>
            </svg>
          </div>

          <div class="table-sequence__item">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/1_3.png" alt="Аксессуар" class="table-sequence__img">
            <p class="table-sequence__text">Добавить аксессуары</p>
          </div>
        </div>

        <a href="#constructor-types" class="button button--angular mt-4">Собрать стол</a>
      </div>
    </div>
  </div>
</section>

<div id="js-vue-content">
  <!-- Fixed Cart button -->
  <div id="cart-btn" class="cart-btn js-cart-btn" style="opacity: 0; display: none;">
    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
    <div class="cart_count">{{ total_count }}</div>
  </div>

  <!-- Constructor Modal -->
  <div class="modal fade" id="constructor-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body p-3">
          <button type="button" class="close modal__close-btn" data-dismiss="modal">
            <span>&times;</span>
          </button>
          <div class="row">
            <div class="col-md-6 text-center">
              <img src="<?= SITE_TEMPLATE_PATH ?>/img/loading.gif" alt="preloader" class="constructor-item-preloader">
              <div class="modal-constructor__wrapper" style="display: none">
                <div class="modal-constructor js-modal-slick">
                  <div class="modal-constructor__item">
                    <a href="<?= SITE_TEMPLATE_PATH ?>/img/temp/1.png" data-fancybox="images">
                      <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/1.png" alt="" class="modal-constructor__img">
                    </a>
                  </div>
                  <div class="modal-constructor__item">
                    <a href="<?= SITE_TEMPLATE_PATH ?>/img/temp/2.png" data-fancybox="images">
                      <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/2.png" alt="" class="modal-constructor__img">
                    </a>
                  </div>
                  <div class="modal-constructor__item">
                    <a href="<?= SITE_TEMPLATE_PATH ?>/img/temp/3.jpg" data-fancybox="images">
                      <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/3.jpg" alt="" class="modal-constructor__img">
                    </a>
                  </div>
                  <div class="modal-constructor__item">
                    <a href="<?= SITE_TEMPLATE_PATH ?>/img/temp/1.png" data-fancybox="images">
                      <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/1.png" alt="" class="modal-constructor__img">
                    </a>
                  </div>
                  <div class="modal-constructor__item">
                    <a href="<?= SITE_TEMPLATE_PATH ?>/img/temp/2.png" data-fancybox="images">
                      <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/2.png" alt="" class="modal-constructor__img">
                    </a>
                  </div>
                  <div class="modal-constructor__item">
                    <a href="<?= SITE_TEMPLATE_PATH ?>/img/temp/3.jpg" data-fancybox="images">
                      <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/3.jpg" alt="" class="modal-constructor__img">
                    </a>
                  </div>
                  <div class="modal-constructor__item">
                    <a href="<?= SITE_TEMPLATE_PATH ?>/img/temp/1.png" data-fancybox="images">
                      <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/1.png" alt="" class="modal-constructor__img">
                    </a>
                  </div>
                  <div class="modal-constructor__item">
                    <a href="<?= SITE_TEMPLATE_PATH ?>/img/temp/2.png" data-fancybox="images">
                      <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/2.png" alt="" class="modal-constructor__img">
                    </a>
                  </div>
                  <div class="modal-constructor__item">
                    <a href="<?= SITE_TEMPLATE_PATH ?>/img/temp/3.jpg" data-fancybox="images">
                      <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/3.jpg" alt="" class="modal-constructor__img">
                    </a>
                  </div>
                </div>
                <div class="modal-constructor modal-constructor-mini js-modal-slick-mini">
                  <div class="modal-constructor__item"><img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/1.png" alt=""
                                                            class="modal-constructor__img">
                  </div>
                  <div class="modal-constructor__item"><img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/2.png" alt=""
                                                            class="modal-constructor__img">
                  </div>
                  <div class="modal-constructor__item"><img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/3.jpg" alt=""
                                                            class="modal-constructor__img">
                  </div>
                  <div class="modal-constructor__item"><img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/1.png" alt=""
                                                            class="modal-constructor__img">
                  </div>
                  <div class="modal-constructor__item"><img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/2.png" alt=""
                                                            class="modal-constructor__img">
                  </div>
                  <div class="modal-constructor__item"><img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/3.jpg" alt=""
                                                            class="modal-constructor__img">
                  </div>
                  <div class="modal-constructor__item"><img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/1.png" alt=""
                                                            class="modal-constructor__img">
                  </div>
                  <div class="modal-constructor__item"><img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/2.png" alt=""
                                                            class="modal-constructor__img">
                  </div>
                  <div class="modal-constructor__item"><img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/3.jpg" alt=""
                                                            class="modal-constructor__img">
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <p class="modal__title">
                Столешница с прямоугольным вырезом (шоколадная)
              </p>
              <p class="modal__price">1 990 р.</p>

              <form action="">
                <input name="id" value="123" type="hidden">
                <input name="title" value="Супер столешница" type="hidden">
                <input name="price" value="999" type="hidden">
                <input name="count" value="1" type="hidden">
                <input name="img" value="<?= SITE_TEMPLATE_PATH ?>/img/temp/3.jpg" type="hidden">
                <button class="button--dark button js-add-to-cart" type="button">Выбрать</button>
              </form>

              <p class="modal__desc">
                Блоки питания BSPS 12V предназначены для отдельного питания светодиодной ленты в системах внутреннего
                освещения. Выбор блока питания для конкретного применения зависит от номинального напряжения или тока
                работы светодиодов, общей потребляемой мощности и параметров напряжения питающей сети. Параметры
                напряжения сети должны находиться в рабочем диапазоне. Для стабильной работы необходимо оставлять запас
                по
                мощности примерно в 20%. Защита от перегрузок и скачков напряжения срабатывает при перегрузке свыше 120%
                от номинальной мощности. Автоматический перезапуск при восстановлении рабочих параметров. Защита от
                перегрева — отключение происходит при температуре свыше 105°C. Автоматический перезапуск при
                восстановлении рабочей температуры у блоков питания мощностью свыше 60 Вт. Перегрузки более 80–85%
                сокращают срок службы блоков питания.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Cart Modal -->
  <div class="modal fade" id="cart-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Ваша корзина</h5>
          <button type="button" class="close m-0 p-0 modal__close-btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body p-3">
          <div class="selected-list d-flex flex-column" id="selected-items">
            <div class="selected-list__item d-flex flex-column flex-md-row align-items-center" v-for="product in cart">
              <div class="selected-list__info d-flex align-items-center">
                <div class="selected-list__img" v-bind:style="{'background-image': 'url(' + product.img + ')'}"></div>
                <p class="selected-list__title">
                  {{ product.title }}
                </p>
              </div>

              <div class="selected-list__actions d-flex align-items-center justify-content-between">
                <div class="selected-list__counter d-flex justify-content-around align-items-center">
                  <div class="selected-list__action-btn" v-on:click="update_item_count(product.id, true)">+</div>
                  <div class="selected-list__count">{{ product.count }}</div>
                  <div class="selected-list__action-btn" v-on:click="update_item_count(product.id, false)">—</div>
                </div>
                <div class="selected-list__price">{{ product.price * product.count }} руб.</div>
                <div class="selected-list__action-btn" v-on:click="delete_item(product.id)">
                  &times;
                </div>
              </div>
            </div>
            <p v-show="total_count > 0"><b>Итого</b>: {{ total_price}} руб.</p>
          </div>
          <p class="text-center mb-0" v-show="total_count === 0">В вашей корзине пусто</p>
        </div>
        <div class="modal-footer">
          <button v-show="total_count > 0" type="button" class="button--dark button m-auto">Сделать заказ</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Конструктор -->
  <section class="section text-center mb-0" id="constructor">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="section__title">
            Конструктор столов
          </h2>
        </div>
      </div>
    </div>

    <div class="constructor-types" id="constructor-types">
      <div class="container-fluid px-0">
        <div class="row no-gutters overflow-hidden">
          <div class="col-md-4">
            <a class="constructor-types__item js-type-1 js-section-btn"
               style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/img/constructor/1.jpg')">
              <p class="constructor-types__title">Столешницы</p>
            </a>
          </div>

          <div class="col-md-4">
            <a class="constructor-types__item js-type-2 js-section-btn"
               style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/img/constructor/2.jpg')">
              <p class="constructor-types__title">Стальное подстолье</p>
            </a>
          </div>

          <div class="col-md-4">
            <a class="constructor-types__item js-type-3 js-section-btn"
               style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/img/constructor/3.jpg')">
              <p class="constructor-types__title">Аксессуары</p>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="constructor" id="constructor-items">
      <div class="constructor__list-1 constructor-carousel owl-carousel owl-theme">
        <div class="constructor__item js-constructor__item">
          <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/1.png" alt="" class="constructor__img">
          <p class="constructor__title">
            Столешница с прямоугольным вырезом (бесцветная)
          </p>
          <p class="constructor__desc">

          </p>
          <p class="constructor__price">
            29 990р.
          </p>
        </div>
        <div class="constructor__item js-constructor__item">
          <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/1.png" alt="" class="constructor__img">
          <p class="constructor__title">
            Столешница с прямоугольным вырезом (бесцветная)
          </p>
          <p class="constructor__desc">

          </p>
          <p class="constructor__price">
            29 990р.
          </p>
        </div>
        <div class="constructor__item js-constructor__item">
          <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/1.png" alt="" class="constructor__img">
          <p class="constructor__title">
            Столешница с прямоугольным вырезом (бесцветная)
          </p>
          <p class="constructor__desc">

          </p>
          <p class="constructor__price">
            29 990р.
          </p>
        </div>
        <div class="constructor__item js-constructor__item">
          <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/1.png" alt="" class="constructor__img">
          <p class="constructor__title">
            Столешница с прямоугольным вырезом (бесцветная)
          </p>
          <p class="constructor__desc">

          </p>
          <p class="constructor__price">
            29 990р.
          </p>
        </div>
        <div class="constructor__item js-constructor__item">
          <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/1.png" alt="" class="constructor__img">
          <p class="constructor__title">
            Столешница с прямоугольным вырезом (бесцветная)
          </p>
          <p class="constructor__desc">

          </p>
          <p class="constructor__price">
            29 990р.
          </p>
        </div>
        <div class="constructor__item js-constructor__item">
          <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/1.png" alt="" class="constructor__img">
          <p class="constructor__title">
            Столешница с прямоугольным вырезом (бесцветная)
          </p>
          <p class="constructor__desc">

          </p>
          <p class="constructor__price">
            29 990р.
          </p>
        </div>
      </div>
      <div class="constructor__list-2 constructor-carousel owl-carousel owl-theme">
        <div class="constructor__item js-constructor__item">
          <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/2.png" alt="" class="constructor__img">
          <p class="constructor__title">
            Столешница с прямоугольным вырезом (бесцветная)
          </p>
          <p class="constructor__desc">

          </p>
          <p class="constructor__price">
            29 990р.
          </p>
        </div>
        <div class="constructor__item js-constructor__item">
          <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/2.png" alt="" class="constructor__img">
          <p class="constructor__title">
            Столешница с прямоугольным вырезом (бесцветная)
          </p>
          <p class="constructor__desc">

          </p>
          <p class="constructor__price">
            29 990р.
          </p>
        </div>
        <div class="constructor__item js-constructor__item">
          <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/2.png" alt="" class="constructor__img">
          <p class="constructor__title">
            Столешница с прямоугольным вырезом (бесцветная)
          </p>
          <p class="constructor__desc">

          </p>
          <p class="constructor__price">
            29 990р.
          </p>
        </div>
        <div class="constructor__item js-constructor__item">
          <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/2.png" alt="" class="constructor__img">
          <p class="constructor__title">
            Столешница с прямоугольным вырезом (бесцветная)
          </p>
          <p class="constructor__desc">

          </p>
          <p class="constructor__price">
            29 990р.
          </p>
        </div>
        <div class="constructor__item js-constructor__item">
          <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/2.png" alt="" class="constructor__img">
          <p class="constructor__title">
            Столешница с прямоугольным вырезом (бесцветная)
          </p>
          <p class="constructor__desc">

          </p>
          <p class="constructor__price">
            29 990р.
          </p>
        </div>
        <div class="constructor__item js-constructor__item">
          <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/2.png" alt="" class="constructor__img">
          <p class="constructor__title">
            Столешница с прямоугольным вырезом (бесцветная)
          </p>
          <p class="constructor__desc">

          </p>
          <p class="constructor__price">
            29 990р.
          </p>
        </div>
      </div>
      <div class="constructor__list-3 constructor-carousel owl-carousel owl-theme">
        <div class="constructor__item js-constructor__item">
          <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/3.jpg" alt="" class="constructor__img">
          <p class="constructor__title">
            Столешница с прямоугольным вырезом (бесцветная)
          </p>
          <p class="constructor__desc">

          </p>
          <p class="constructor__price">
            29 990р.
          </p>
        </div>
        <div class="constructor__item js-constructor__item">
          <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/3.jpg" alt="" class="constructor__img">
          <p class="constructor__title">
            Столешница с прямоугольным вырезом (бесцветная)
          </p>
          <p class="constructor__desc">

          </p>
          <p class="constructor__price">
            29 990р.
          </p>
        </div>
        <div class="constructor__item js-constructor__item">
          <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/3.jpg" alt="" class="constructor__img">
          <p class="constructor__title">
            Столешница с прямоугольным вырезом (бесцветная)
          </p>
          <p class="constructor__desc">

          </p>
          <p class="constructor__price">
            29 990р.
          </p>
        </div>
        <div class="constructor__item js-constructor__item">
          <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/3.jpg" alt="" class="constructor__img">
          <p class="constructor__title">
            Столешница с прямоугольным вырезом (бесцветная)
          </p>
          <p class="constructor__desc">

          </p>
          <p class="constructor__price">
            29 990р.
          </p>
        </div>
        <div class="constructor__item js-constructor__item">
          <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/3.jpg" alt="" class="constructor__img">
          <p class="constructor__title">
            Столешница с прямоугольным вырезом (бесцветная)
          </p>
          <p class="constructor__desc">

          </p>
          <p class="constructor__price">
            29 990р.
          </p>
        </div>
        <div class="constructor__item js-constructor__item">
          <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/3.jpg" alt="" class="constructor__img">
          <p class="constructor__title">
            Столешница с прямоугольным вырезом (бесцветная)
          </p>
          <p class="constructor__desc">

          </p>
          <p class="constructor__price">
            29 990р.
          </p>
        </div>
        <div class="constructor__item js-constructor__item">
          <img src="<?= SITE_TEMPLATE_PATH ?>/img/temp/3.jpg" alt="" class="constructor__img">
          <p class="constructor__title">
            Столешница с прямоугольным вырезом (бесцветная)
          </p>
          <p class="constructor__desc">

          </p>
          <p class="constructor__price">
            29 990р.
          </p>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- СТОЛЫ В СТИЛЕ LOFT -->
<section class="section section_bg_cream mt-0">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="section__content section__content_paddings">
          <h1 class="section__title">
            СТОЛЫ В СТИЛЕ LOFT
          </h1>

          <p class="section__text">
            Компьютерные и письменные столы изготавливаются из массива сосны по технологии сращенный и цельноламельный
            щит. Породы деревьев, такие как дуб, орех, тик, ясень могут также использоваться по просьбе клиентов.
            Может
            использоваться дубовый слэб и эпоксидная смола.
          </p>

          <p class="section__text">
            Прочная, надёжная конструкция стола впечатлит любого человека. При этом легкость свиду массивности стола
            также удивляет. Большое количество аксессуаров подчеркнут Ваш вкус и стиль, сделав своё рабочее место
            уникальным как и Вы сами.
          </p>

          <p class="section__text">
            Новый стол по выбранным размерам изготавливается от 2 до 3 недель в зависимости от выбранных параметров
            столешницы, подстолья и встраиваемых аксессуаров.
          </p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="section__fill-img"></div>
      </div>
    </div>
  </div>
</section>

<!-- Мы гордимся нашими столами -->
<section class="section text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section__title">
          Мы гордимся нашими столами
        </h2>

        <div class="table-sequence d-flex flex-column flex-md-row justify-content-around">
          <div class="table-sequence__item">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/2_1.svg" alt="Материалы"
                 class="table-sequence__img table-sequence__img--small">
            <p class="table-sequence__title">Материалы</p>
            <p class="table-sequence__text">
              Для наших столов мы используем только натуральную древесину
            </p>
          </div>

          <div class="table-sequence__item">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/2_2.svg" alt="Дизайн"
                 class="table-sequence__img table-sequence__img--small">
            <p class="table-sequence__title">Дизайн</p>
            <p class="table-sequence__text">
              Мы предлагаем стильную и комфортную мебель для повседневной работы дома и в офисе
            </p>
          </div>

          <div class="table-sequence__item">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/2_3.svg" alt="Качество"
                 class="table-sequence__img table-sequence__img--small">
            <p class="table-sequence__title">Качество</p>
            <p class="table-sequence__text">
              Все наши продукты созданы вручную и делаются с вниманием и любовью
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Партнеры -->
<section class="section text-center" id="partners">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section__title">
          Наши партнеры
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12 ">
        <div class="partners js-partners-carousel owl-carousel">
          <div class="partners__item" title="Зеркало Ирк - Изготовление Зеркал">
            <a href="https://zerkalo-irk.ru/" target="_blank">
              <img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/zerkalo.png" alt="Зеркало Ирк Логотип">
            </a>
          </div>
          <div class="partners__item" title="Зеркало Ирк - Изготовление Зеркал">
            <a href="https://grim-irk.ru/" target="_blank">
              <img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/grim.png" alt="Грим Ирк Логотип">
            </a>
          </div>
          <div class="partners__item" title="Алита - Изготовление мебели для торговых помещений">
            <a href="https://alita-mebel.ru/" target="_blank">
              <img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/alita.png" alt="Алита Логотип">
            </a>
          </div>
          <div class="partners__item" title="Айронвуд - Изготовление встраиваемой мебели">
            <a href="https://айронвуд.рф/" target="_blank">
              <img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/ironwood.png" alt="Айронвуд Логотип">
            </a>
          </div>
          <div class="partners__item" title="Зеркало Ирк - Изготовление встраемых кухонь и шкафов">
            <a href="https://мебель-стайл.рф/" target="_blank">
              <img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/mebel-style.png" alt="Мебель стайл Логотип">
            </a>
          </div>
          <div class="partners__item" title="Аврора- Изготовление встраиваемой и корпуской мебели ">
            <a href="https://aurora-irk.ru/" target="_blank">
              <img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/aurora.png" alt="Аврора Логотип">
            </a>
          </div>
          <div class="partners__item" title="Loft Mebel - интернет магазин лофт мебели">
            <a href="https://loft-mebel.shop/" target="_blank">
              <img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/loft-mebel.png" alt="Лофт Мебель Логотип">
            </a>
          </div>
          <div class="partners__item" title="Лофт Мебель - магазин лофт мебели">
            <a href="https://loft-mebel.store/" target="_blank">
              <img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/loft-mebel.store.png" alt="Лофт Мебель Логотип">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Мы в Instagram -->
<section class="section text-center inst-section" id="instagram">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section__title">
          Мы в Instagram <i class="fa fa-instagram" aria-hidden="true"></i>
        </h2>
      </div>
      <div class="col-12">
        <a href="https://www.instagram.com/aurora_mebel.irk/" class="d-block" target="_blank">
          <div class="embedsocial-hashtag" data-ref="7a4e308a251638060715c3444b32defa98814146"></div>
          <script>(function (d, s, id) {
                  var js;
                  if (d.getElementById(id)) {
                      return;
                  }
                  js = d.createElement(s);
                  js.id = id;
                  js.src = "https://embedsocial.com/cdn/ht.js";
                  d.getElementsByTagName("head")[0].appendChild(js);
              }(document, "script", "EmbedSocialHashtagScript"));</script>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Контакты -->
<section class="section" id="contacts">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section__title text-center">
          Наши контакты
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <a class="dg-widget-link"
           href="https://2gis.ru/irkutsk/firm/70000001054705785/center/104.21233892440797,52.25034764614961/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">
          Посмотреть на карте Иркутска
        </a>
        <div class="dg-widget-link">
          <a href="https://2gis.ru/irkutsk/center/104.212346,52.250208/zoom/16/routeTab/rsType/bus/to/104.212346,52.250208╎ГРИМ, мастерская по изготовлению гримерных и парящих зеркал?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">
            Найти проезд до ГРИМ, мастерская по изготовлению гримерных и парящих зеркал
          </a>
        </div>
        <script charset="utf-8" src="<?= SITE_TEMPLATE_PATH ?>/js/lib/DGWidgetLoader.js"></script>
        <script charset="utf-8">
            new DGWidgetLoader({
                "width": "100%",
                "height": "50vh",
                "borderColor": "#a3a3a3",
                "pos": {"lat": 52.25034764614961, "lon": 104.21233892440797, "zoom": 16},
                "opt": {"city": "irkutsk"},
                "org": [{"id": "70000001054705785"}],
                "scrolling": "no"
            });
        </script>
        <noscript style="color:#c00;font-size:16px;font-weight:bold;">
          Виджет карты использует JavaScript. Включите его в настройках вашего браузера.
        </noscript>
      </div>
      <div class="col-md-4">
        <p class="contacts__title">
          Иркутск, Россия
        </p>
        <p class="contacts__text">
          бульвар Рябикова, 43е
        </p>

        <a href="tel:79140003787" class="contacts__title">
          +7 (914) 000-37-87
        </a>
        <p class="contacts__text">
          В любое время 24/7
        </p>

        <a href="mailto:aurora-irk@yandex.ru" class="contacts__title">
          aurora-irk@yandex.ru
        </a>
        <p class="contacts__text">
          бульвар Рябикова, 43В
        </p>

        <a target="_blank" href="https://www.instagram.com/aurora_mebel.irk/" class="contacts__title">
          aurora_mebel.irk <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <p class="contacts__text">
          Смотрите наши работы в инстаграме
        </p>

      </div>
    </div>
  </div>
</section>
