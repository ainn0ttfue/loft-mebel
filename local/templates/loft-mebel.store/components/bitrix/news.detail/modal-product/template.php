<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="col-md-6 text-center">
  <img src="<?= SITE_TEMPLATE_PATH ?>/img/loading.gif" alt="preloader" class="constructor-item-preloader">

  <div class="modal-constructor__wrapper" style="display: none">
    <div class="modal-constructor js-modal-slick">
      <? foreach ($arResult['PROPERTIES']['IMAGES']['VALUE'] as $imgID): ?>
        <?
        $arIMG = CFile::GetFileArray($imgID);

        ?>
        <div class="modal-constructor__item">
          <a href="<?= $arIMG["SRC"] ?>" data-fancybox="images">
            <img src="<?= $arIMG["SRC"] ?>" alt="" class="modal-constructor__img">
          </a>
        </div>
      <? endforeach; ?>
    </div>

    <div class="modal-constructor modal-constructor-mini js-modal-slick-mini">
      <? foreach ($arResult['PROPERTIES']['IMAGES']['VALUE'] as $imgID): ?>
        <? $arIMG = CFile::GetFileArray($imgID); ?>

        <div class="modal-constructor__item">
          <img src="<?= $arIMG["SRC"] ?>" alt="" class="modal-constructor__img">
        </div>
      <? endforeach; ?>
    </div>
  </div>
</div>
<div class="col-md-6">
  <p class="modal__title">
    <?= $arResult["NAME"] ?>
  </p>
  <p class="modal__price"><?= $arResult['PROPERTIES']['PRICE']['VALUE'] ?> руб.</p>

  <form action="">
    <input name="id" value="<?= $arResult["ID"] ?>" type="hidden">
    <input name="title" value="<?= $arResult["NAME"] ?>" type="hidden">
    <input name="price" value="<?= $arResult['PROPERTIES']['PRICE']['VALUE'] ?>" type="hidden">
    <input name="count" value="1" type="hidden">
    <input name="img" value="<?= $arResult["PREVIEW_PICTURE"]["SRC"] ?>" type="hidden">
    <button class="button--dark button js-add-to-cart" type="button">Выбрать</button>
  </form>

  <p class="modal__desc">
    <?= $arResult["PREVIEW_TEXT"] ?>
  </p>
</div>
