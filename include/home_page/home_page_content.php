<div class="header__top-logo-home-page">
	<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo_sun.svg" alt="">
</div>

<section class="main_slider__wrapper parallax__group" style="z-index:2">

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

</section>




<section class="home-section home-section__categories parallax__group">


	<?
	$HOME_DECOR_IBLOCK_ID = 21;
	$HOME_DECOR_ELEMENT_ID = 78512;
	
	/*
	CModule::IncludeModule('iblock');
	$arSelect = Array("ID", "NAME", "PROPERTY_IMAGE_LEFT", "PROPERTY_IMAGE_RIGHT", "PROPERTY_IMAGE_LEFT_BACK", "PROPERTY_IMAGE_RIGHT_BACK", "PROPERTY_IMAGE_LEFT_FORE", "PROPERTY_IMAGE_RIGHT_FORE");
	$arFilter = Array("IBLOCK_ID"=>IntVal($HOME_DECOR_IBLOCK_ID), "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "ID" => $HOME_DECOR_ELEMENT_ID);
	$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
	$arRes = array();
	while($arFields = $res->GetNext())
	{
		$arRes[] = $arFields;
	}
	printArr($arRes);
	*/
	?>
	
	<?$APPLICATION->IncludeComponent("bitrix:news.detail", "home-page_decor", Array(
		"IBLOCK_ID" => "21",	// Код информационного блока
			"ELEMENT_ID" => $HOME_DECOR_ELEMENT_ID,	// ID новости
			"COMPONENT_TEMPLATE" => ".default",
			"IBLOCK_TYPE" => "buterbrodov",	// Тип информационного блока (используется только для проверки)
			"ELEMENT_CODE" => "",	// Код новости
			"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
			"FIELD_CODE" => array(	// Поля
				0 => "",
				1 => "",
			),
			"PROPERTY_CODE" => array(	// Свойства
				0 => "undefined",
				1 => "",
			),
			"IBLOCK_URL" => "",	// URL страницы просмотра списка элементов (по умолчанию - из настроек инфоблока)
			"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
			"AJAX_MODE" => "N",	// Включить режим AJAX
			"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
			"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
			"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
			"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
			"CACHE_TYPE" => "A",	// Тип кеширования
			"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
			"CACHE_GROUPS" => "N",	// Учитывать права доступа
			"SET_TITLE" => "N",	// Устанавливать заголовок страницы
			"SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
			"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
			"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
			"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
			"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
			"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
			"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
			"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
			"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
			"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
			"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
			"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
			"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа элемента
			"DISPLAY_DATE" => "N",	// Выводить дату элемента
			"DISPLAY_NAME" => "N",	// Выводить название элемента
			"DISPLAY_PICTURE" => "N",	// Выводить детальное изображение
			"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
			"USE_SHARE" => "N",	// Отображать панель соц. закладок
			"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
			"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
			"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
			"PAGER_TITLE" => "Страница",	// Название категорий
			"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
			"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
			"SET_STATUS_404" => "N",	// Устанавливать статус 404
			"SHOW_404" => "N",	// Показ специальной страницы
			"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		),
		false
	);?>






	<div class="home-section__categories-items-wrapper parallax__layer parallax__layer--base">
		<div class="container position-relative">
			<div class="h2">
				<?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/home_page/categories_title.php", Array(), Array(
					"MODE"      => "text",
					"NAME"      => "categories title",
					"TEMPLATE"  => "text_include_template.php"
				));?>
			</div>
			<div class="row home-section__categories-items">
				<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "home-page_categories", Array(
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
	</div>

</section>

<?/*?>
<section class="home-section home-section__news">
	<div class="h2">Новости</div>

	<div class="news_slider__swiper-navigation swiper-navigation">
		<div class="swiper-button-prev btn btn-simple"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icons/arrow-left.svg" alt="prev"></div>
		<div class="swiper-button-next btn btn-simple"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icons/arrow-right.svg" alt="next"></div>
	</div>

	<div class="row">
		<div class="col-md-4 col-xl-3 order-1 order-md-0 col-decor">
			<div class="animations__cow3 animations__cow_stand3">@@include('animations/cow3.svg.html')</div>
		</div>
		<div class="col-md-8 col-xl-9 order-0 order-md-1 col-slider">
			<div class="news_slider news-list swiper">
	
				<div class="swiper-wrapper">

					@@include('include/news_slider-item.html', {
					"img": "1.jpg",
					"date": '26 февраля, 2023',
					"h1": 'Масленица вкуснее с Бутербродов!',
					"text": 'Масленица вкуснее с Бутербродов! Участвуйте в акциях наших партнёров Магнит и Верный, выигрывайте подарки!',
					})

					@@include('include/news_slider-item.html', {
					"img": "2.jpg",
					"date": '26 февраля, 2023',
					"h1": '2 Натуральные продукты с зеленых',
					"text": 'Масленица вкуснее с Бутербродов! Участвуйте в акциях наших партнёров Магнит и Верный, выигрывайте подарки!',
					})
	
					@@include('include/news_slider-item.html', {
					"img": "1.jpg",
					"date": '26 февраля, 2023',
					"h1": '3 Натуральные продукты с зеленых ',
					"text": 'Масленица вкуснее с Бутербродов! Участвуйте в акциях наших партнёров Магнит и Верный, выигрывайте подарки!',
					})
	
	
					@@include('include/news_slider-item.html', {
					"img": "2.jpg",
					"date": '26 февраля, 2023',
					"h1": '4 Натуральные продукты с зеленых',
					"text": 'Масленица вкуснее с Бутербродов! Участвуйте в акциях наших партнёров Магнит и Верный, выигрывайте подарки!',
					})
	
					@@include('include/news_slider-item.html', {
					"img": "1.jpg",
					"date": '26 февраля, 2023',
					"h1": '5 Натуральные продукты с зеленых',
					"text": 'Масленица вкуснее с Бутербродов! Участвуйте в акциях наших партнёров Магнит и Верный, выигрывайте подарки!',
					})
	
					@@include('include/news_slider-item.html', {
					"img": "2.jpg",
					"date": '26 февраля, 2023',
					"h1": '6 Масленица вкуснее с Бутербродов!',
					"text": 'Участвуйте в акциях наших партнёров Магнит и Верный, выигрывайте подарки!',
					})

					@@include('include/news_slider-item.html', {
					"img": "2.jpg",
					"date": '26 февраля, 2023',
					"h1": '7 Масленица вкуснее с Бутербродов!',
					"text": 'Участвуйте в акциях наших партнёров Магнит и Верный, выигрывайте подарки!',
					})

					@@include('include/news_slider-item.html', {
					"img": "2.jpg",
					"date": '26 февраля, 2023',
					"h1": '8 Масленица вкуснее с Бутербродов!',
					"text": 'Участвуйте в акциях наших партнёров Магнит и Верный, выигрывайте подарки!',
					})
				</div>
	
			</div>

		</div>
	</div>

	<div class="show_all">
		<a href="news.html" class="btn">Смотреть все</a>
	</div>

</section>


<section class="home-section home-section__recepie">

		<div class="h2">Рецепты</div>
	
		<div class="recepie_slider__swiper-navigation swiper-navigation">
			<div class="swiper-button-prev btn btn-simple"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icons/arrow-left.svg" alt="prev"></div>
			<div class="swiper-button-next btn btn-simple"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icons/arrow-right.svg" alt="next"></div>
		</div>
	
	
		<div class="recepie_slider recepie-list swiper">
			<div class="swiper-wrapper">
	
				@@include('include/recepie_slider-item.html', {
				"img": "2.jpg",
				"h1": '8 Натуральные продукты с зеленых лугов в ваш дом',
				"time": '45 мин',
				})
	
				@@include('include/recepie_slider-item.html', {
				"img": "1.jpg",
				"h1": 'Тонкие блинчики с Бутербродов',
				"time": '45 мин',
				})
	
				@@include('include/recepie_slider-item.html', {
				"img": "2.jpg",
				"h1": '2 Натуральные продукты с зеленых лугов в ваш дом',
				"time": '45 мин',
				})
	
				@@include('include/recepie_slider-item.html', {
				"img": "1.jpg",
				"h1": '3 Натуральные продукты с зеленых лугов в ваш дом',
				"time": '45 мин',
				})
	
				@@include('include/recepie_slider-item.html', {
				"img": "2.jpg",
				"h1": '4 Натуральные продукты с зеленых лугов в ваш дом',
				"time": '45 мин',
				})
	
				@@include('include/recepie_slider-item.html', {
				"img": "1.jpg",
				"h1": '5 Натуральные продукты с зеленых лугов в ваш дом',
				"time": '45 мин',
				})
	
				@@include('include/recepie_slider-item.html', {
				"img": "2.jpg",
				"h1": '6 Натуральные продукты с зеленых лугов в ваш дом',
				"time": '45 мин',
				})
	
				@@include('include/recepie_slider-item.html', {
				"img": "1.jpg",
				"h1": '7 Натуральные продукты с зеленых лугов в ваш дом',
				"time": '45 мин',
				})
			</div>
		</div>
	
		<div class="animations__decor d-none d-lg-block">
			<div class="animations__decor-cow animations__decor-left animate-in-view">
				<div class="animations__cow1-2">@@include('animations/cow1.svg.html')</div>
			</div>
		</div>

		<div class="animations__decor">
			<div class="animations__decor-cow animations__decor-right">
				<div class="animations__cow2 animations__cow_stand">@@include('animations/cow2.svg.html')</div>
			</div>
		</div>
	
		<div class="show_all">
			<a href="recepie.html" class="btn">Смотреть все</a>
		</div>
	

</section>
<?*/?>



