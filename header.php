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
	<meta property="og:site_name" content="<?=$siteName?>">
	<meta property="og:image" content="<?=$site_url?><? myShowProperty('og_image');?>">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<meta property="og:locale" content="ru_RU">
	<?
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/humbleScroll.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/app.min.js");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/style.min.css");
	?>
	<script data-skip-moving="true">
	var curPage = '<?=$APPLICATION->GetCurPage(false)?>';
	var admin = <?if($USER && $USER->IsAdmin()):?>true<?else:?>false<?endif?>;
	</script>

</head>

<body<?if($homePage):?> class="home-page"<?endif?>>
<?include($_SERVER['DOCUMENT_ROOT'].'/local/php_interface/admin_panel.php');?>


	<div class="wrapper <?$APPLICATION->ShowViewContent('pageClasses');?> <?if($ERROR_404=="Y"):?>error404<?endif?>">


		<div class="header__top">
			<div class="header__top-logo">
				<a class="header__top-logo-link" href="/">
					<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo.svg" alt="<?=$siteName?>">
				</a>
			</div>

			<?if(!$homePage):?>
			<div class="header__top-back-button">
				<a href="index.html" class="btn back-button-catalog">
					<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icons/arrow-left.svg" alt="←" class="icon">
					<span class="d-none d-lg-block">Все бренды</span>
				</a>
				<a href="index.html" class="btn back-button-general">
					<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icons/arrow-left.svg" alt="←" class="icon">
					<span class="d-none d-lg-block">Назад</span>
				</a>
			</div>
			<?endif?>
			
		</div>
		
		<div class="header__menu-btn menu_open">
			<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icons/menu.svg" alt="menu" class="d-none d-lg-block">
			<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icons/menu_mobile.svg" alt="menu" class="d-lg-none">
		</div>
		
		<div class="header__menu-btn menu_close">
			<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icons/menu_close.svg" alt="x">
		</div>


		<header class="header" ss-container>

			<div class="decor">
				<div class="header__decor-left anim-repeat"  data-hs-="fade " style="--hs-delay: 0ms; --hs-translate-ratio: 10; ">
					<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/home-page/decor-slider.png" alt="">
				</div>

				<div class="decor-left header__bg-decor-left1 anim-repeat"  data-hs-="fade  " style="--hs-delay: 300ms; --hs-translate-ratio: 10; ">
					<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/decor-bg/syr1.svg" alt="">
				</div>

				<div class="decor-left header__bg-decor-left2 anim-repeat"  data-hs-="fade  " style="--hs-delay: 600ms; --hs-translate-ratio: 10; ">
					<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/decor-bg/maslo.svg" alt="">
				</div>

				<div class="decor-right header__bg-decor-right1 anim-repeat"  data-hs-="fade  " style="--hs-delay: 900ms; --hs-translate-ratio: 10; ">
					<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/decor-bg/tvorog.svg" alt="">
				</div>
			</div>


			<div class="header-inner">

				<nav class="header__nav">
					<?$APPLICATION->IncludeComponent("bitrix:menu", "header_menu", Array(
						"ROOT_MENU_TYPE" => "buterbrodov_header_menu",	// Тип меню для первого уровня
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
				</nav>

				<div class="header__categories">
					<div class="h2">
						<?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/header/categories_title.php", Array(), Array(
							"MODE"      => "html",
							"NAME"      => "categories title",
							"TEMPLATE"  => "text_include_template.php"
						));?>
					</div>


					<div class="header__categories-wrapper d-flex">
						<div class="animations__cow1"><?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/animations/cow1.svg", Array(), Array("SHOW_BORDER"=>false));?></div>
						<div class="header__categories-items animations__logo">
							<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "header_categories", Array(
									"VIEW_MODE" => "TEXT",	// Вид списка подразделов
									"SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
									"IBLOCK_TYPE" => "",	// Тип инфоблока
									"IBLOCK_ID" => "17",	// Инфоблок
									"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
									"SECTION_CODE" => "",	// Код раздела
									"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
									"COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
									"TOP_DEPTH" => "1",	// Максимальная отображаемая глубина разделов
									"SECTION_FIELDS" => "",	// Поля разделов
									"SECTION_USER_FIELDS" => array("UF_LOGO"),	// Свойства разделов
									"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
									"CACHE_TYPE" => "A",	// Тип кеширования
									"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
									"CACHE_NOTES" => "",
									"CACHE_GROUPS" => "Y",	// Учитывать права доступа
								),
								false
							);?>
						</div>
					</div>

					<div class="animations__cow2"><?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/animations/cow2.svg", Array(), Array("SHOW_BORDER"=>false));?></div>
				</div>

				<div class="header__contacts d-lg-flex">
					<div class="header__contacts-item">
						<?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/header/copyright.php", Array(), Array(
							"MODE"      => "html",
							"NAME"      => "copyright",
							"TEMPLATE"  => "text_include_template.php"
						));?>
					</div>
					<div class="header__contacts-item">
						<?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/header/phone.php", Array(), Array(
							"MODE"      => "html",
							"NAME"      => "phone",
							"TEMPLATE"  => "text_include_template.php"
						));?>
					</div>
				</div>


			</div>
		</header>


		<?if($homePage):?>
			<div class="parallax">
			<?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/home_page/home_page_content.php", Array(), Array(
				"MODE"      => "html",
				"NAME"      => "",
				"TEMPLATE"  => "text_include_template.php"
			));?>
		<?endif?>




<?//$APPLICATION->ShowViewContent('...');?>

