<? require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php'; ?>

<?php
// Если файл открыт напрямую
if (count($_POST) === 0) {
  header("Location: {$_SERVER['HTTP_REFERER']}");
  exit;
}
?>

<? $APPLICATION->IncludeComponent(
  "bitrix:news.detail",
  "modal-product",
  array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",
    "ADD_ELEMENT_CHAIN" => "N",
    "ADD_SECTIONS_CHAIN" => "N",
    "AJAX_MODE" => "N",
    "AJAX_OPTION_ADDITIONAL" => "",
    "AJAX_OPTION_HISTORY" => "N",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "N",
    "BROWSER_TITLE" => "-",
    "CACHE_GROUPS" => "N",
    "CACHE_TIME" => "36000000",
    "CACHE_TYPE" => "A",
    "CHECK_DATES" => "Y",
    "DETAIL_URL" => "",
    "DISPLAY_BOTTOM_PAGER" => "N",
    "DISPLAY_DATE" => "N",
    "DISPLAY_NAME" => "N",
    "DISPLAY_PICTURE" => "N",
    "DISPLAY_PREVIEW_TEXT" => "N",
    "DISPLAY_TOP_PAGER" => "N",
    "ELEMENT_CODE" => "",
    "ELEMENT_ID" => $_POST['product_id'],
    "FIELD_CODE" => array(
      0 => "PREVIEW_PICTURE",
      1 => "",
    ),
    "IBLOCK_ID" => "20",
    "IBLOCK_TYPE" => "products",
    "IBLOCK_URL" => "",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "MESSAGE_404" => "",
    "META_DESCRIPTION" => "-",
    "META_KEYWORDS" => "-",
    "PAGER_BASE_LINK_ENABLE" => "N",
    "PAGER_SHOW_ALL" => "N",
    "PAGER_TEMPLATE" => ".default",
    "PAGER_TITLE" => "Страница",
    "PROPERTY_CODE" => array(
      0 => "PRICE",
      1 => "",
    ),
    "SET_BROWSER_TITLE" => "N",
    "SET_CANONICAL_URL" => "N",
    "SET_LAST_MODIFIED" => "N",
    "SET_META_DESCRIPTION" => "N",
    "SET_META_KEYWORDS" => "N",
    "SET_STATUS_404" => "N",
    "SET_TITLE" => "N",
    "SHOW_404" => "N",
    "STRICT_SECTION_CHECK" => "N",
    "USE_PERMISSIONS" => "N",
    "USE_SHARE" => "N",
    "COMPONENT_TEMPLATE" => "modal-product"
  ),
  false
); ?>
<? require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_after.php'; ?>