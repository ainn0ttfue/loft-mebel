<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <? $APPLICATION->ShowHead(); ?>

  <title><? $APPLICATION->ShowTitle() ?></title>

  <link rel="icon" href="/favicon.png" type="image/png">
  <link rel="canonical" href="https://loft-mebel.store"/>

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
        <a href="#header"><img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.png" alt="??????????????" class="nav__logo"></a>
        <a href="#header" class="navbar-btn d-inline-block d-md-none">
          <i class="fa fa-home" aria-hidden="true"></i>
        </a>
      </div>

      <div class="col-md-6 col-xl-4 offset-xl-1 text-center" v-show="is_open || !is_mobile">
        <div class="navigation d-flex flex-column flex-md-row justify-content-center h-100 align-items-center">
          <div class="navigation__item"><a href="#header" class="link link--bold">??????????????</a></div>
          <div class="navigation__item"><a href="#constructor" class="link link--bold">??????????????????????</a></div>
          <div class="navigation__item"><a href="#partners" class="link link--bold">????????????????</a></div>
          <div class="navigation__item"><a href="#contacts" class="link link--bold">????????????????</a></div>
        </div>
      </div>

      <div class="col-md-5 col-xl-4" v-show="is_open || !is_mobile">
        <div class="nav__contacts d-flex flex-column flex-md-row justify-content-around h-100 align-items-center">
          <div class="d-flex flex-column flex-lg-row justify-content-between">
            <a href="tel:89140003787" class="link mr-md-4">+7 (914) 000-37-87</a>
            <a href="mailto:sale@loft-mebel.shop" class="link">sale@loft-mebel.shop</a>
          </div>
          <a href="#contacts" class="button">????????????????</a>
        </div>
      </div>
    </div>
  </div>
</nav>

<!-- Header -->
<header id="header" class="header text-center jarallax" data-jarallax data-speed="0.2">
  <img src="<?= SITE_TEMPLATE_PATH ?>/img/bg/1.jpg" alt="????????????" class="jarallax-img">

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="header__content d-flex flex-column justify-content-center">
          <p class="header__title">
            LOFT MEBEL
          </p>
          <p class="header__desc">
            ???????????? ???????????????????????? ?? ?????????????? ???????????? ?????? ??????
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

<!-- ???????????????????????? ???????? ???????????? ?? ???????????????? -->
<section id="section-1" class="section text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section__title">
          ???????????????????????? ???????? ???????????? ?? ????????????????
        </h2>

        <p class="section__text section__text_fixed-width">
          ???????????????????????????? ???????????????????????? ???????????? ?????????? ?????????????????? ?????? ???????? ?? ??????????
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ?????????????? ???????? ???????? -->
<section class="section text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section__title">
          ?????????????? ???????? ????????
        </h2>

        <p class="section__text section__text_fixed-width">
          ?????????????? ?????????????????????? ???????????????? ?????????????????? ?? ?????????????????? ?????? ????????????????????????
        </p>

        <div class="table-sequence d-flex flex-column flex-md-row justify-content-around align-items-center">
          <div class="table-sequence__item">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/1_1.png" alt="????????????????????" class="table-sequence__img">
            <p class="table-sequence__text">???????????????? ????????????????????</p>
          </div>

          <div class="table-sequence__arrow">
            <svg width="44" stroke="#000000" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.7 18.7">
              <path class="st0" d="M.1 9.4h23"></path>
              <path class="st1" d="M14.1 18.4l9-9-9-9"></path>
            </svg>
          </div>

          <div class="table-sequence__item">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/1_2.png" alt="??????????????????" class="table-sequence__img">
            <p class="table-sequence__text">?????????????? ??????????????????</p>
          </div>

          <div class="table-sequence__arrow">
            <svg width="44" stroke="#000000" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.7 18.7">
              <path class="st0" d="M.1 9.4h23"></path>
              <path class="st1" d="M14.1 18.4l9-9-9-9"></path>
            </svg>
          </div>

          <div class="table-sequence__item">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/1_3.png" alt="??????????????????" class="table-sequence__img">
            <p class="table-sequence__text">???????????????? ????????????????????</p>
          </div>
        </div>

        <a href="#constructor-types" class="button button--angular mt-4">?????????????? ????????</a>
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
          <div class="row js-constructor-modal-wrap">
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
          <p class="modal-title h4" id="exampleModalLongTitle">???????? ??????????????</p>
          <button type="button" class="close m-0 p-0 modal__close-btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body p-3">
          <div class="selected-list d-flex flex-column" id="selected-items">
            <div class="selected-list__item d-flex flex-column flex-md-row align-items-center" v-for="product in cart">
              <div class="selected-list__info d-flex align-items-center js-cart-item" :data-id="product.id">
                <div class="selected-list__img" v-bind:style="{'background-image': 'url(' + product.img + ')'}"></div>
                <p class="selected-list__title">
                  {{ product.title }}
                </p>
              </div>

              <div class="selected-list__actions d-flex align-items-center justify-content-between">
                <div class="selected-list__counter d-flex justify-content-around align-items-center">
                  <div class="selected-list__action-btn" v-on:click="update_item_count(product.id, true)">+</div>
                  <div class="selected-list__count">{{ product.count }}</div>
                  <div class="selected-list__action-btn" v-on:click="update_item_count(product.id, false)">???</div>
                </div>
                <div class="selected-list__price">{{ product.price * product.count }} ??????.</div>
                <div class="selected-list__action-btn" v-on:click="delete_item(product.id)">
                  &times;
                </div>
              </div>
            </div>
            <p v-show="total_count > 0"><b>??????????</b>: {{ total_price}} ??????.</p>
          </div>
          <p class="text-center mb-0" v-show="total_count === 0">?? ?????????? ?????????????? ??????????</p>
        </div>
        <div class="modal-footer">
          <button v-show="total_count > 0" type="button" class="button--dark button m-auto js-send-order">
            ?????????????????? ???????????? (WhatsApp <i class="fa fa-whatsapp" aria-hidden="true"></i>)
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- ?????????????????????? -->
  <section class="section text-center mb-0" id="constructor">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="section__title">
            ?????????????????????? ????????????
          </h2>
        </div>
      </div>
    </div>

    <div class="constructor-types" id="constructor-types">
      <div class="container-fluid px-0">
        <? $APPLICATION->IncludeComponent(
          "bitrix:catalog.section.list",
          "sections-menu",
          array(
            "ADD_SECTIONS_CHAIN" => "N",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "N",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "COUNT_ELEMENTS" => "N",
            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
            "FILTER_NAME" => "",
            "IBLOCK_ID" => "20",
            "IBLOCK_TYPE" => "products",
            "SECTION_CODE" => "",
            "SECTION_FIELDS" => array(
              0 => "",
              1 => "",
            ),
            "SECTION_ID" => "",
            "SECTION_URL" => "",
            "SECTION_USER_FIELDS" => array(
              0 => "",
              1 => "",
            ),
            "SHOW_PARENT_NAME" => "Y",
            "TOP_DEPTH" => "1",
            "VIEW_MODE" => "LINE",
            "COMPONENT_TEMPLATE" => "sections-menu"
          ),
          false
        ); ?>
      </div>
    </div>

    <div class="constructor" id="constructor-items">
      <? $APPLICATION->IncludeComponent("bitrix:news.list", "products", array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",  // ???????????? ???????????? ????????
        "ADD_SECTIONS_CHAIN" => "N",  // ???????????????? ???????????? ?? ?????????????? ??????????????????
        "AJAX_MODE" => "N",  // ???????????????? ?????????? AJAX
        "AJAX_OPTION_ADDITIONAL" => "",  // ???????????????????????????? ??????????????????????????
        "AJAX_OPTION_HISTORY" => "N",  // ???????????????? ???????????????? ?????????????????? ????????????????
        "AJAX_OPTION_JUMP" => "N",  // ???????????????? ?????????????????? ?? ???????????? ????????????????????
        "AJAX_OPTION_STYLE" => "N",  // ???????????????? ?????????????????? ????????????
        "CACHE_FILTER" => "N",  // ???????????????????? ?????? ?????????????????????????? ??????????????
        "CACHE_GROUPS" => "N",  // ?????????????????? ?????????? ??????????????
        "CACHE_TIME" => "36000000",  // ?????????? ?????????????????????? (??????.)
        "CACHE_TYPE" => "A",  // ?????? ??????????????????????
        "CHECK_DATES" => "Y",  // ???????????????????? ???????????? ???????????????? ???? ???????????? ???????????? ????????????????
        "DETAIL_URL" => "",  // URL ???????????????? ???????????????????? ?????????????????? (???? ?????????????????? - ???? ???????????????? ??????????????????)
        "DISPLAY_BOTTOM_PAGER" => "N",  // ???????????????? ?????? ??????????????
        "DISPLAY_DATE" => "N",  // ???????????????? ???????? ????????????????
        "DISPLAY_NAME" => "Y",  // ???????????????? ???????????????? ????????????????
        "DISPLAY_PICTURE" => "Y",  // ???????????????? ?????????????????????? ?????? ????????????
        "DISPLAY_PREVIEW_TEXT" => "Y",  // ???????????????? ?????????? ????????????
        "DISPLAY_TOP_PAGER" => "N",  // ???????????????? ?????? ??????????????
        "FIELD_CODE" => array(  // ????????
          0 => "",
          1 => "",
        ),
        "FILTER_NAME" => "",  // ????????????
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",  // ???????????????? ????????????, ???????? ?????? ???????????????????? ????????????????
        "IBLOCK_ID" => "20",  // ?????? ?????????????????????????????? ??????????
        "IBLOCK_TYPE" => "products",  // ?????? ?????????????????????????????? ?????????? (???????????????????????? ???????????? ?????? ????????????????)
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",  // ???????????????? ???????????????? ?? ?????????????? ??????????????????
        "INCLUDE_SUBSECTIONS" => "N",  // ???????????????????? ???????????????? ?????????????????????? ??????????????
        "MESSAGE_404" => "",  // ?????????????????? ?????? ???????????? (???? ?????????????????? ???? ????????????????????)
        "NEWS_COUNT" => "2000",  // ???????????????????? ???????????????? ???? ????????????????
        "PAGER_BASE_LINK_ENABLE" => "N",  // ???????????????? ?????????????????? ????????????
        "PAGER_DESC_NUMBERING" => "N",  // ???????????????????????? ???????????????? ??????????????????
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",  // ?????????? ?????????????????????? ?????????????? ?????? ???????????????? ??????????????????
        "PAGER_SHOW_ALL" => "N",  // ???????????????????? ???????????? "??????"
        "PAGER_SHOW_ALWAYS" => "N",  // ???????????????? ????????????
        "PAGER_TEMPLATE" => ".default",  // ???????????? ???????????????????????? ??????????????????
        "PAGER_TITLE" => "??????????????",  // ???????????????? ??????????????????
        "PARENT_SECTION" => "25",  // ID ??????????????
        "PARENT_SECTION_CODE" => "",  // ?????? ??????????????
        "PREVIEW_TRUNCATE_LEN" => "",  // ???????????????????????? ?????????? ???????????? ?????? ???????????? (???????????? ?????? ???????? ??????????)
        "PROPERTY_CODE" => array(  // ????????????????
          0 => "PRICE",
          1 => "",
        ),
        "SET_BROWSER_TITLE" => "N",  // ?????????????????????????? ?????????????????? ???????? ????????????????
        "SET_LAST_MODIFIED" => "N",  // ?????????????????????????? ?? ???????????????????? ???????????? ?????????? ?????????????????????? ????????????????
        "SET_META_DESCRIPTION" => "N",  // ?????????????????????????? ???????????????? ????????????????
        "SET_META_KEYWORDS" => "N",  // ?????????????????????????? ???????????????? ?????????? ????????????????
        "SET_STATUS_404" => "N",  // ?????????????????????????? ???????????? 404
        "SET_TITLE" => "N",  // ?????????????????????????? ?????????????????? ????????????????
        "SHOW_404" => "N",  // ?????????? ?????????????????????? ????????????????
        "SORT_BY1" => "ACTIVE_FROM",  // ???????? ?????? ???????????? ???????????????????? ????????????????
        "SORT_BY2" => "SORT",  // ???????? ?????? ???????????? ???????????????????? ????????????????
        "SORT_ORDER1" => "ASC",  // ?????????????????????? ?????? ???????????? ???????????????????? ????????????????
        "SORT_ORDER2" => "ASC",  // ?????????????????????? ?????? ???????????? ???????????????????? ????????????????
        "STRICT_SECTION_CHECK" => "N",  // ?????????????? ???????????????? ?????????????? ?????? ???????????? ????????????
      ),
        false
      ); ?>
      <? $APPLICATION->IncludeComponent("bitrix:news.list", "products", array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",  // ???????????? ???????????? ????????
        "ADD_SECTIONS_CHAIN" => "N",  // ???????????????? ???????????? ?? ?????????????? ??????????????????
        "AJAX_MODE" => "N",  // ???????????????? ?????????? AJAX
        "AJAX_OPTION_ADDITIONAL" => "",  // ???????????????????????????? ??????????????????????????
        "AJAX_OPTION_HISTORY" => "N",  // ???????????????? ???????????????? ?????????????????? ????????????????
        "AJAX_OPTION_JUMP" => "N",  // ???????????????? ?????????????????? ?? ???????????? ????????????????????
        "AJAX_OPTION_STYLE" => "N",  // ???????????????? ?????????????????? ????????????
        "CACHE_FILTER" => "N",  // ???????????????????? ?????? ?????????????????????????? ??????????????
        "CACHE_GROUPS" => "N",  // ?????????????????? ?????????? ??????????????
        "CACHE_TIME" => "36000000",  // ?????????? ?????????????????????? (??????.)
        "CACHE_TYPE" => "A",  // ?????? ??????????????????????
        "CHECK_DATES" => "Y",  // ???????????????????? ???????????? ???????????????? ???? ???????????? ???????????? ????????????????
        "DETAIL_URL" => "",  // URL ???????????????? ???????????????????? ?????????????????? (???? ?????????????????? - ???? ???????????????? ??????????????????)
        "DISPLAY_BOTTOM_PAGER" => "N",  // ???????????????? ?????? ??????????????
        "DISPLAY_DATE" => "N",  // ???????????????? ???????? ????????????????
        "DISPLAY_NAME" => "Y",  // ???????????????? ???????????????? ????????????????
        "DISPLAY_PICTURE" => "Y",  // ???????????????? ?????????????????????? ?????? ????????????
        "DISPLAY_PREVIEW_TEXT" => "Y",  // ???????????????? ?????????? ????????????
        "DISPLAY_TOP_PAGER" => "N",  // ???????????????? ?????? ??????????????
        "FIELD_CODE" => array(  // ????????
          0 => "",
          1 => "",
        ),
        "FILTER_NAME" => "",  // ????????????
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",  // ???????????????? ????????????, ???????? ?????? ???????????????????? ????????????????
        "IBLOCK_ID" => "20",  // ?????? ?????????????????????????????? ??????????
        "IBLOCK_TYPE" => "products",  // ?????? ?????????????????????????????? ?????????? (???????????????????????? ???????????? ?????? ????????????????)
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",  // ???????????????? ???????????????? ?? ?????????????? ??????????????????
        "INCLUDE_SUBSECTIONS" => "N",  // ???????????????????? ???????????????? ?????????????????????? ??????????????
        "MESSAGE_404" => "",  // ?????????????????? ?????? ???????????? (???? ?????????????????? ???? ????????????????????)
        "NEWS_COUNT" => "2000",  // ???????????????????? ???????????????? ???? ????????????????
        "PAGER_BASE_LINK_ENABLE" => "N",  // ???????????????? ?????????????????? ????????????
        "PAGER_DESC_NUMBERING" => "N",  // ???????????????????????? ???????????????? ??????????????????
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",  // ?????????? ?????????????????????? ?????????????? ?????? ???????????????? ??????????????????
        "PAGER_SHOW_ALL" => "N",  // ???????????????????? ???????????? "??????"
        "PAGER_SHOW_ALWAYS" => "N",  // ???????????????? ????????????
        "PAGER_TEMPLATE" => ".default",  // ???????????? ???????????????????????? ??????????????????
        "PAGER_TITLE" => "??????????????",  // ???????????????? ??????????????????
        "PARENT_SECTION" => "24",  // ID ??????????????
        "PARENT_SECTION_CODE" => "",  // ?????? ??????????????
        "PREVIEW_TRUNCATE_LEN" => "",  // ???????????????????????? ?????????? ???????????? ?????? ???????????? (???????????? ?????? ???????? ??????????)
        "PROPERTY_CODE" => array(  // ????????????????
          0 => "PRICE",
          1 => "",
        ),
        "SET_BROWSER_TITLE" => "N",  // ?????????????????????????? ?????????????????? ???????? ????????????????
        "SET_LAST_MODIFIED" => "N",  // ?????????????????????????? ?? ???????????????????? ???????????? ?????????? ?????????????????????? ????????????????
        "SET_META_DESCRIPTION" => "N",  // ?????????????????????????? ???????????????? ????????????????
        "SET_META_KEYWORDS" => "N",  // ?????????????????????????? ???????????????? ?????????? ????????????????
        "SET_STATUS_404" => "N",  // ?????????????????????????? ???????????? 404
        "SET_TITLE" => "N",  // ?????????????????????????? ?????????????????? ????????????????
        "SHOW_404" => "N",  // ?????????? ?????????????????????? ????????????????
        "SORT_BY1" => "ACTIVE_FROM",  // ???????? ?????? ???????????? ???????????????????? ????????????????
        "SORT_BY2" => "SORT",  // ???????? ?????? ???????????? ???????????????????? ????????????????
        "SORT_ORDER1" => "ASC",  // ?????????????????????? ?????? ???????????? ???????????????????? ????????????????
        "SORT_ORDER2" => "ASC",  // ?????????????????????? ?????? ???????????? ???????????????????? ????????????????
        "STRICT_SECTION_CHECK" => "N",  // ?????????????? ???????????????? ?????????????? ?????? ???????????? ????????????
      ),
        false
      ); ?>
      <? $APPLICATION->IncludeComponent("bitrix:news.list", "products", array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",  // ???????????? ???????????? ????????
        "ADD_SECTIONS_CHAIN" => "N",  // ???????????????? ???????????? ?? ?????????????? ??????????????????
        "AJAX_MODE" => "N",  // ???????????????? ?????????? AJAX
        "AJAX_OPTION_ADDITIONAL" => "",  // ???????????????????????????? ??????????????????????????
        "AJAX_OPTION_HISTORY" => "N",  // ???????????????? ???????????????? ?????????????????? ????????????????
        "AJAX_OPTION_JUMP" => "N",  // ???????????????? ?????????????????? ?? ???????????? ????????????????????
        "AJAX_OPTION_STYLE" => "N",  // ???????????????? ?????????????????? ????????????
        "CACHE_FILTER" => "N",  // ???????????????????? ?????? ?????????????????????????? ??????????????
        "CACHE_GROUPS" => "N",  // ?????????????????? ?????????? ??????????????
        "CACHE_TIME" => "36000000",  // ?????????? ?????????????????????? (??????.)
        "CACHE_TYPE" => "A",  // ?????? ??????????????????????
        "CHECK_DATES" => "Y",  // ???????????????????? ???????????? ???????????????? ???? ???????????? ???????????? ????????????????
        "DETAIL_URL" => "",  // URL ???????????????? ???????????????????? ?????????????????? (???? ?????????????????? - ???? ???????????????? ??????????????????)
        "DISPLAY_BOTTOM_PAGER" => "N",  // ???????????????? ?????? ??????????????
        "DISPLAY_DATE" => "N",  // ???????????????? ???????? ????????????????
        "DISPLAY_NAME" => "Y",  // ???????????????? ???????????????? ????????????????
        "DISPLAY_PICTURE" => "Y",  // ???????????????? ?????????????????????? ?????? ????????????
        "DISPLAY_PREVIEW_TEXT" => "Y",  // ???????????????? ?????????? ????????????
        "DISPLAY_TOP_PAGER" => "N",  // ???????????????? ?????? ??????????????
        "FIELD_CODE" => array(  // ????????
          0 => "",
          1 => "",
        ),
        "FILTER_NAME" => "",  // ????????????
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",  // ???????????????? ????????????, ???????? ?????? ???????????????????? ????????????????
        "IBLOCK_ID" => "20",  // ?????? ?????????????????????????????? ??????????
        "IBLOCK_TYPE" => "products",  // ?????? ?????????????????????????????? ?????????? (???????????????????????? ???????????? ?????? ????????????????)
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",  // ???????????????? ???????????????? ?? ?????????????? ??????????????????
        "INCLUDE_SUBSECTIONS" => "N",  // ???????????????????? ???????????????? ?????????????????????? ??????????????
        "MESSAGE_404" => "",  // ?????????????????? ?????? ???????????? (???? ?????????????????? ???? ????????????????????)
        "NEWS_COUNT" => "2000",  // ???????????????????? ???????????????? ???? ????????????????
        "PAGER_BASE_LINK_ENABLE" => "N",  // ???????????????? ?????????????????? ????????????
        "PAGER_DESC_NUMBERING" => "N",  // ???????????????????????? ???????????????? ??????????????????
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",  // ?????????? ?????????????????????? ?????????????? ?????? ???????????????? ??????????????????
        "PAGER_SHOW_ALL" => "N",  // ???????????????????? ???????????? "??????"
        "PAGER_SHOW_ALWAYS" => "N",  // ???????????????? ????????????
        "PAGER_TEMPLATE" => ".default",  // ???????????? ???????????????????????? ??????????????????
        "PAGER_TITLE" => "??????????????",  // ???????????????? ??????????????????
        "PARENT_SECTION" => "23",  // ID ??????????????
        "PARENT_SECTION_CODE" => "",  // ?????? ??????????????
        "PREVIEW_TRUNCATE_LEN" => "",  // ???????????????????????? ?????????? ???????????? ?????? ???????????? (???????????? ?????? ???????? ??????????)
        "PROPERTY_CODE" => array(  // ????????????????
          0 => "PRICE",
          1 => "",
        ),
        "SET_BROWSER_TITLE" => "N",  // ?????????????????????????? ?????????????????? ???????? ????????????????
        "SET_LAST_MODIFIED" => "N",  // ?????????????????????????? ?? ???????????????????? ???????????? ?????????? ?????????????????????? ????????????????
        "SET_META_DESCRIPTION" => "N",  // ?????????????????????????? ???????????????? ????????????????
        "SET_META_KEYWORDS" => "N",  // ?????????????????????????? ???????????????? ?????????? ????????????????
        "SET_STATUS_404" => "N",  // ?????????????????????????? ???????????? 404
        "SET_TITLE" => "N",  // ?????????????????????????? ?????????????????? ????????????????
        "SHOW_404" => "N",  // ?????????? ?????????????????????? ????????????????
        "SORT_BY1" => "ID",  // ???????? ?????? ???????????? ???????????????????? ????????????????
        "SORT_BY2" => "SORT",  // ???????? ?????? ???????????? ???????????????????? ????????????????
        "SORT_ORDER1" => "ASC",  // ?????????????????????? ?????? ???????????? ???????????????????? ????????????????
        "SORT_ORDER2" => "ASC",  // ?????????????????????? ?????? ???????????? ???????????????????? ????????????????
        "STRICT_SECTION_CHECK" => "N",  // ?????????????? ???????????????? ?????????????? ?????? ???????????? ????????????
      ),
        false
      ); ?>
    </div>
  </section>
</div>

<!-- ?????????? ?? ?????????? LOFT -->
<section class="section section_bg_cream mt-0">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="section__content section__content_paddings">
          <h1 class="section__title">
            ?????????? ?? ?????????? LOFT
          </h1>

          <p class="section__text">
            ???????????????????????? ?? ???????????????????? ?????????? ?????????????????????????????? ???? ?????????????? ?????????? ???? ???????????????????? ?????????????????? ?? ??????????????????????????????
            ??????. ???????????? ????????????????, ?????????? ?????? ??????, ????????, ??????, ?????????? ?????????? ?????????? ???????????????????????????? ???? ?????????????? ????????????????.
            ??????????
            ???????????????????????????? ?????????????? ???????? ?? ???????????????????? ??????????.
          </p>

          <p class="section__text">
            ??????????????, ???????????????? ?????????????????????? ?????????? ?????????????????? ???????????? ????????????????. ?????? ???????? ???????????????? ?????????? ?????????????????????? ??????????
            ?????????? ????????????????. ?????????????? ???????????????????? ?????????????????????? ???????????????????? ?????? ???????? ?? ??????????, ???????????? ???????? ?????????????? ??????????
            ???????????????????? ?????? ?? ???? ????????.
          </p>

          <p class="section__text">
            ?????????? ???????? ???? ?????????????????? ???????????????? ?????????????????????????????? ???? 2 ???? 3 ???????????? ?? ?????????????????????? ???? ?????????????????? ????????????????????
            ????????????????????, ?????????????????? ?? ???????????????????????? ??????????????????????.
          </p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="section__fill-img"></div>
      </div>
    </div>
  </div>
</section>

<!-- ???? ???????????????? ???????????? ?????????????? -->
<section class="section text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section__title">
          ???? ???????????????? ???????????? ??????????????
        </h2>

        <div class="table-sequence d-flex flex-column flex-md-row justify-content-around">
          <div class="table-sequence__item">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/2_1.svg" alt="??????????????????"
                 class="table-sequence__img table-sequence__img--small">
            <p class="table-sequence__title">??????????????????</p>
            <p class="table-sequence__text">
              ?????? ?????????? ???????????? ???? ???????????????????? ???????????? ?????????????????????? ??????????????????
            </p>
          </div>

          <div class="table-sequence__item">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/2_2.svg" alt="????????????"
                 class="table-sequence__img table-sequence__img--small">
            <p class="table-sequence__title">????????????</p>
            <p class="table-sequence__text">
              ???? ???????????????????? ???????????????? ?? ???????????????????? ???????????? ?????? ???????????????????????? ???????????? ???????? ?? ?? ??????????
            </p>
          </div>

          <div class="table-sequence__item">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/2_3.svg" alt="????????????????"
                 class="table-sequence__img table-sequence__img--small">
            <p class="table-sequence__title">????????????????</p>
            <p class="table-sequence__text">
              ?????? ???????? ???????????????? ?????????????? ?????????????? ?? ???????????????? ?? ?????????????????? ?? ??????????????
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ???????????????? -->
<section class="section text-center" id="partners">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section__title">
          ???????? ????????????????
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12 ">
        <div class="partners js-partners-carousel owl-carousel">
          <div class="partners__item" title="?????????????? ?????? - ???????????????????????? ????????????">
            <a href="https://zerkalo-irk.ru/" target="_blank">
              <img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/zerkalo.png" alt="?????????????? ?????? ??????????????">
            </a>
          </div>
          <div class="partners__item" title="?????????????? ?????? - ???????????????????????? ????????????">
            <a href="https://grim-irk.ru/" target="_blank">
              <img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/grim.png" alt="???????? ?????? ??????????????">
            </a>
          </div>
          <div class="partners__item" title="?????????? - ???????????????????????? ???????????? ?????? ???????????????? ??????????????????">
            <a href="https://alita-mebel.ru/" target="_blank">
              <img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/alita.png" alt="?????????? ??????????????">
            </a>
          </div>
          <div class="partners__item" title="???????????????? - ???????????????????????? ???????????????????????? ????????????">
            <a href="https://????????????????.????/" target="_blank">
              <img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/ironwood.png" alt="???????????????? ??????????????">
            </a>
          </div>
          <div class="partners__item" title="?????????????? ?????? - ???????????????????????? ?????????????????? ???????????? ?? ????????????">
            <a href="https://????????????-??????????.????/" target="_blank">
              <img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/mebel-style.png" alt="???????????? ?????????? ??????????????">
            </a>
          </div>
          <div class="partners__item" title="????????????- ???????????????????????? ???????????????????????? ?? ?????????????????? ???????????? ">
            <a href="https://aurora-irk.ru/" target="_blank">
              <img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/aurora.png" alt="???????????? ??????????????">
            </a>
          </div>
          <div class="partners__item" title="Loft Mebel - ???????????????? ?????????????? ???????? ????????????">
            <a href="https://loft-mebel.shop/" target="_blank">
              <img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/loft-mebel.png" alt="???????? ???????????? ??????????????">
            </a>
          </div>
          <div class="partners__item" title="???????? ???????????? - ?????????????? ???????? ????????????">
            <a href="https://loft-mebel.store/" target="_blank">
              <img src="<?= SITE_TEMPLATE_PATH ?>/img/partners/loft-mebel.store.png" alt="???????? ???????????? ??????????????">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ???? ?? Instagram -->
<!--<section class="section text-center inst-section" id="instagram">-->
<!--  <div class="container">-->
<!--    <div class="row">-->
<!--      <div class="col-lg-12">-->
<!--        <h2 class="section__title">-->
<!--          ???? ?? Instagram <i class="fa fa-instagram" aria-hidden="true"></i>-->
<!--        </h2>-->
<!--      </div>-->
<!--      <div class="col-12">-->
<!--        <a href="https://www.instagram.com/aurora_mebel.irk/" class="d-block" target="_blank">-->
<!--          <div class="embedsocial-hashtag" data-ref="7a4e308a251638060715c3444b32defa98814146"></div>-->
<!--          <script>(function (d, s, id) {-->
<!--                  var js;-->
<!--                  if (d.getElementById(id)) {-->
<!--                      return;-->
<!--                  }-->
<!--                  js = d.createElement(s);-->
<!--                  js.id = id;-->
<!--                  js.src = "https://embedsocial.com/cdn/ht.js";-->
<!--                  d.getElementsByTagName("head")[0].appendChild(js);-->
<!--              }(document, "script", "EmbedSocialHashtagScript"));</script>-->
<!--        </a>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->

<!-- ???????????????? -->
<section class="section" id="contacts">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section__title text-center">
          ???????? ????????????????
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <a class="dg-widget-link"
           href="https://2gis.ru/irkutsk/firm/70000001054705785/center/104.21233892440797,52.25034764614961/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">
          ???????????????????? ???? ?????????? ????????????????
        </a>
        <div class="dg-widget-link">
          <a href="https://2gis.ru/irkutsk/center/104.212346,52.250208/zoom/16/routeTab/rsType/bus/to/104.212346,52.250208???????????, ???????????????????? ???? ???????????????????????? ?????????????????? ?? ?????????????? ?????????????utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">
            ?????????? ???????????? ???? ????????, ???????????????????? ???? ???????????????????????? ?????????????????? ?? ?????????????? ????????????
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
          ???????????? ?????????? ???????????????????? JavaScript. ???????????????? ?????? ?? ???????????????????? ???????????? ????????????????.
        </noscript>
      </div>
      <div class="col-md-4">
        <p class="contacts__title">
          ??????????????, ????????????
        </p>
        <p class="contacts__text">
          ?????????????? ????????????????, 43??
        </p>

        <a href="tel:79140003787" class="contacts__title">
          +7 (914) 000-37-87
        </a>
        <p class="contacts__text">
          ?? ?????????? ?????????? 24/7
        </p>

        <a href="mailto:aurora-irk@yandex.ru" class="contacts__title">
          aurora-irk@yandex.ru
        </a>
        <p class="contacts__text">
          ?????????????? ????????????????, 43??
        </p>

<!--        <a target="_blank" href="https://www.instagram.com/aurora_mebel.irk/" class="contacts__title">-->
<!--          aurora_mebel.irk <i class="fa fa-instagram" aria-hidden="true"></i>-->
<!--        </a>-->
<!--        <p class="contacts__text">-->
<!--          ???????????????? ???????? ???????????? ?? ????????????????????-->
<!--        </p>-->

      </div>
    </div>
  </div>
</section>

