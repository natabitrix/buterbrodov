<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main,
	Bitrix\Main\Page\Asset;
	
$context = Main\Application::getInstance()->getContext();
$request = $context->getRequest();
$server = $context->getServer();
$protocol = (CMain::IsHTTPS()) ? "https://" : "http://";

$rsSites = CSite::GetByID(SITE_ID);
$arSite = $rsSites->Fetch();

$curPage = $APPLICATION->GetCurPage(false);
$curDir = $APPLICATION->GetCurDir(true);
$fullPage = $APPLICATION->GetCurPage(true);

$curURL = $protocol.$arSite["SERVER_NAME"].$curPage;
$siteName = str_replace('&quot;','',$arSite["NAME"]);
$siteUrl = $protocol.SITE_SERVER_NAME;

define("PATH_TO_404", "/404.php");

global $USER,$homePage;
if ($curPage === '/')
{
	$homePage = true;
}

$ERROR_404 = defined('ERROR_404') && ERROR_404=="Y" ? "Y" : "N";

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title><?$APPLICATION->ShowTitle('title')?><?if(!$homePage):?> | <?=$siteName?><?endif?></title>
	<?$APPLICATION->ShowHead();?>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no" />
	<meta name="format-detection" content="address=no" />

	<link rel="canonical" href="<?=$siteUrl.$curPage?>">

	<meta property="og:title" content="<? myShowProperty("og_title"); ?>">
	<meta property="og:description" content="<?$APPLICATION->ShowProperty("description")?>">
	<meta property="og:url" content="<?=$curURL.$page?>">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Торговый комплекс Гостиный двор">
	<meta property="og:image" content="<?=$site_url?><? myShowProperty('og_image');?>">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<meta property="og:locale" content="ru_RU">
	<?
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.min");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/app.min.js");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.min.css");
	?>
	<script data-skip-moving="true">
	var curPage = '<?=$APPLICATION->GetCurPage(false)?>';
	var admin = <?if($USER && $USER->IsAdmin()):?>true<?else:?>false<?endif?>;
	</script>

</head>

<body>
<?include($_SERVER['DOCUMENT_ROOT'].'/local/php_interface/admin_panel.php');?>


	<div class="wrapper <?$APPLICATION->ShowViewContent('pageClasses');?> <?if($ERROR_404=="Y"):?>error404<?endif?>">


							<?if(!$homePage):?><a class="header__logo-link" href="/"><?endif?>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="<?=$siteName?>">
							<?if(!$homePage):?></a><?endif?>


							<?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/header/address.php", Array(), Array(
								"MODE"      => "html",
								"NAME"      => "address",
								"TEMPLATE"  => "text_include_template.php"
							));?>

							<?$APPLICATION->IncludeComponent("bitrix:menu", "", Array(
								"ROOT_MENU_TYPE" => "buterbrodov_menu",	// Тип меню для первого уровня
									"MENU_CACHE_TYPE" => "A",	// Тип кеширования
									"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
									"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
									"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
									"MAX_LEVEL" => "1",	// Уровень вложенности меню
									"CHILD_MENU_TYPE" => "gostinydvor_menu",	// Тип меню для остальных уровней
									"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
									"DELAY" => "N",	// Откладывать выполнение шаблона меню
									"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
									"COMPONENT_TEMPLATE" => "tree",
									"MENU_THEME" => "site",
									"COMPOSITE_FRAME_MODE" => "AUTO",
									"COMPOSITE_FRAME_TYPE" => "AUTO"
								),
								false
							);?>

<?if($homePage):?>
<?//$APPLICATION->ShowViewContent('...');?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "main_slider", Array(
	"COMPONENT_TEMPLATE" => "",
		"IBLOCK_TYPE" => "",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "18",	// Код информационного блока
		"NEWS_COUNT" => "999",	// Количество новостей на странице
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"FILTER_NAME" => "",	// Фильтр
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "IMAGE",
			1 => "",
			2 => "",
			3 => "",
		),
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "N",	// Учитывать права доступа
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"ACTIVE_DATE_FORMAT" => "",	// Формат показа даты
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "N",	// Выводить название элемента
		"DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
		"COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
		"COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SHOW_404" => "N",	// Показ специальной страницы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
	),
	false
);?>
<?endif?>
	
