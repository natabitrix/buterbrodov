
<div class="header__top-logo-home-page">
	<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo_sun.svg" alt="">
</div>

<section class="main_slider__wrapper parallax__group" style="z-index:2">
	<div class="main_slider swiper">
		<div class="decor d-none d-lg-block">
			<div class="main_slider__decor-left"  data-hs="fade right" style="--hs-delay: 0ms; --hs-translate-ratio: 10; ">
				<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/home-page/decor-slider.png" alt="">
			</div>
		</div>

		<div class="swiper-wrapper">

				@@include('include/main_slider-item.html', {
				"img": "1",
				"h1": '1 Натуральные продукты с зеленых лугов в ваш дом',
				"text": 'Масленица вкуснее с Бутербродов!',
				"speak": 'На пикник!',
				})

				@@include('include/main_slider-item.html', {
				"img": "2",
				"h1": '2 Натуральные продукты с зеленых лугов в ваш дом',
				"text": 'Масленица вкуснее с Бутербродов! Участвуйте в акциях наших партнёров Магнит и Верный, выигрывайте подарки!',
				"speak": 'Творожный творог!',
				})

				@@include('include/main_slider-item.html', {
				"img": "3",
				"h1": '3 Натуральные продукты с зеленых лугов в ваш дом',
				"text": 'Масленица вкуснее с Бутербродов! Участвуйте в акциях наших партнёров Магнит и Верный, выигрывайте подарки!',
				"speak": 'В лес!',
				})

				@@include('include/main_slider-item.html', {
				"img": "4",
				"h1": '4 Натуральные продукты с зеленых лугов в ваш дом',
				"text": 'Масленица вкуснее с Бутербродов! Участвуйте в акциях наших партнёров Магнит и Верный, выигрывайте подарки!',
				"speak": 'На море!',
				})
		</div>

		<div class="swiper-navigation">
			<div class="swiper-button-prev btn btn-simple"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icons/arrow-left.svg" alt="prev"></div>
			<div class="swiper-button-next btn btn-simple"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icons/arrow-right.svg" alt="next"></div>
		</div>

		<div class="animations__decor d-none d-lg-block">
			<div class="animations__decor-cow">
				<div class="animations__cow2 animations__cow_stand">
					@@include('animations/cow2.svg.html')
				</div>
			</div>
		</div>

	</div>
</section>

<section class="home-section home-section__categories parallax__group">
	
	<div class="decor decor-bg parallax__layer parallax__layer--deep">
		<div class="decor-cener home-section__categories-bg-decor-top-center"  data-hs="fade" style="--hs-delay: 0ms; --hs-translate-ratio: 10; ">
			<img src="@img/decor-bg/syr1.svg" alt="">
		</div>
		<div class="decor-left home-section__categories-bg-decor-left1"  data-hs="fade" style="--hs-delay: 200ms; --hs-translate-ratio: 10; ">
			<img src="@img/decor-bg/snake.svg" alt="">
		</div>
		<div class="decor-right home-section__categories-bg-decor-right1"  data-hs="fade" style="--hs-delay: 200ms; --hs-translate-ratio: 10; ">
			<img src="@img/decor-bg/smetana.svg" alt="">
		</div>
		<div class="decor-left home-section__categories-bg-decor-left2"  data-hs="fade" style="--hs-delay: 400ms; --hs-translate-ratio: 10; ">
			<img src="@img/decor-bg/syr5.svg" alt="">
		</div>
		<div class="decor-right home-section__categories-bg-decor-right2"  data-hs="fade" style="--hs-delay: 400ms; --hs-translate-ratio: 10; ">
			<img src="@img/decor-bg/kasha.svg" alt="">
		</div>
		<div class="decor-left home-section__categories-bg-decor-left3"  data-hs="fade" style="--hs-delay: 600ms; --hs-translate-ratio: 10; ">
			<img src="@img/decor-bg/maslo.svg" alt="">
		</div>
		<div class="decor-right home-section__categories-bg-decor-right3"  data-hs="fade" style="--hs-delay: 600ms; --hs-translate-ratio: 10; ">
			<img src="@img/decor-bg/tvorog.svg" alt="">
		</div>
		<div class="decor-left home-section__categories-bg-decor-left4"  data-hs="fade" style="--hs-delay: 800ms; --hs-translate-ratio: 10; ">
			<img src="@img/decor-bg/syr2.svg" alt="">
		</div>
		<div class="decor-right home-section__categories-bg-decor-right4"  data-hs="fade" style="--hs-delay: 800ms; --hs-translate-ratio: 10; ">
			<img src="@img/decor-bg/syr3.svg" alt="">
		</div>
	</div>

	<div class="decor parallax__layer parallax__layer--back">
		<div class="decor-left home-section__categories-decor-left1"  data-hs="fade right" style="--hs-delay: 0ms; --hs-translate-ratio: 10; ">
			<img src="@img/home-page/decor-left1.png" alt="">
		</div>
		<div class="decor-right home-section__categories-decor-right1"  data-hs="fade left" style="--hs-delay: 300ms; --hs-translate-ratio: 10; ">
			<img src="@img/home-page/decor-right1.png" alt="">
		</div>
		<div class="decor-left home-section__categories-decor-left2"  data-hs="fade right" style="--hs-delay: 600ms; --hs-translate-ratio: 10; ">
			<img src="@img/home-page/decor-left2.png" alt="">
		</div>
		<div class="decor-right home-section__categories-decor-right2"  data-hs="fade left" style="--hs-delay: 900ms; --hs-translate-ratio: 10; ">
			<img src="@img/home-page/decor-right2.png" alt="">
		</div>
		<div class="decor-left home-section__categories-decor-left3"  data-hs="fade right" style="--hs-delay: 1200ms; --hs-translate-ratio: 10; ">
			<img src="@img/home-page/decor-left3.png" alt="">
		</div>
		<div class="decor-right home-section__categories-decor-right3"  data-hs="fade left" style="--hs-delay: 1500ms; --hs-translate-ratio: 10; ">
			<img src="@img/home-page/decor-right3.png" alt="">
		</div>
	</div>


	<div class="home-section__categories-items-wrapper parallax__layer parallax__layer--base">
		<div class="container position-relative">
			<div class="h2">Торговые марки</div>
			<div class="row home-section__categories-items">

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

				<div class="col-8 offset-2 home-section__categories-item" data-hs="fade up"><a href="catalog-section.html"><img src="@img/category/1.svg" alt=""></a>
				</div>
				<div class="col-6 home-section__categories-item" data-hs="fade up"><a href="catalog-section.html"><img src="@img/category/2.svg" alt=""></a>
				</div>
				<div class="col-6 home-section__categories-item" data-hs="fade up"><a href="catalog-section.html"><img src="@img/category/3.svg" alt=""></a>
				</div>
				<div class="col-8 offset-2 home-section__categories-item" data-hs="fade up"><a href="catalog-section.html"><img src="@img/category/4.svg" alt=""></a>
				</div>
			</div>
		</div>
	</div>

</section>


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




