<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!-- Footer -->
<footer class="footer" id="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <p class="footer__title footer__title--white">
          LOFT MEBEL
        </p>
        <p class="footer__text">
          ООО "СФЕРА 360" ОГРН 1213800011237
          Офис и склад: 664058, Иркутская область, г.Иркутск, Зеленый, д.14
        </p>

        <p class="footer__text">
          © Copyright LOFT-MEBEL, 2021 / все права защищены. Полное или частичное копирование запрещено.
        </p>
      </div>

      <div class="col-lg-3">
        <p class="footer__title">
          НАВИГАЦИЯ
        </p>

        <ul class="footer__list">
          <li><a href="#header" class="link">Главная</a></li>
          <li><a href="#constructor" class="link">Конструктор</a></li>
          <li><a href="#partners" class="link">Партнеры</a></li>
          <li><a href="#instagram" class="link">Мы в Instagram</a></li>
          <li><a href="#contacts" class="link">Контакты</a></li>
        </ul>
      </div>

      <div class="col-lg-3">
        <p class="footer__title">
          НАШИ ТОВАРЫ
        </p>

        <ul class="footer__list">
          <li><a href="#constructor" class="link">Столешницы</a></li>
          <li><a href="#constructor" class="link">Подстолья</a></li>
          <li><a href="#constructor" class="link">Аксессуары</a></li>
        </ul>
      </div>

      <div class="col-lg-3">
        <p class="footer__title">
          КОНТАКТЫ
        </p>

        <ul class="footer__list">
          <li><a href="tel:89140003787" class="link">+7 (914) 000-37-87</a></li>
          <li><a href="tel:89149120101" class="link">+7 (914) 912-01-01</a></li>
          <li><a href="mailto:sale@loft-mebel.shop" class="link">sale@loft-mebel.shop</a></li>
          <li><a href="mailto:aurora-irk@yandex.ru" class="link">aurora-irk@yandex.ru</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<!-- Load JQuery -->
<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/lib/jquery-3.2.1.min.js'); ?>

<!-- Load JS LIBs -->
<?
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/lib/owl.carousel.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/lib/slick.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/lib/jarallax.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/lib/jquery.fancybox.min.js');
?>

<!-- Load Bootstrap JS-->
<?
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/lib/bootstrap/bootstrap.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/lib/bootstrap/popper.min.js');
?>

<!-- Load Main JS-->
<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/main.js'); ?>

<!-- Load Vue.js -->
<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/lib/vue.js'); ?>
</body>
</html>