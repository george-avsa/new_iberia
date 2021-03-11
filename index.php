<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Новая Иберия</title>
	<link rel="stylesheet" href="styles/main.css">
	<link rel="stylesheet" href="font/roboto/stylesheet.css">
	<link rel="stylesheet" href="font/monsterrat/stylesheet.css">

	<!-- styles for header -->
	<link rel="stylesheet" href="styles/header/header-menu.css">
	<link rel="stylesheet" href="styles/header/header-panel.css">
	<link rel="stylesheet" href="styles/header/header-slider.css">

	<!-- main media -->
	<link rel="stylesheet" href="styles/main_media.css">
	<script src="libs/jquery.js"></script>

	<!-- libs_datepicker -->
	<script src="libs/datepicker/datepicker.min.js"></script>
	<link rel="stylesheet" href="libs/datepicker/datepicker.min.css">

	<!-- styles for slider-mini -->
	<link rel="stylesheet" href="styles/slider-mini.css">

	<!-- styles for advantages -->
	<link rel="stylesheet" href="styles/advantage_list.css">

	<!-- styles for showcase -->
	<link rel="stylesheet" href="styles/showcase.css">

	<!-- styles for genplan -->
	<link rel="stylesheet" href="styles/genplan.css">

	<!-- styles for news -->
	<link rel="stylesheet" href="styles/news.css">

	<!-- styles for footer -->
	<link rel="stylesheet" href="styles/footer.css">

	<!-- styles for modal (house) -->
	<link rel="stylesheet" href="styles/modals/land_or_house/style.css">

	<!-- styles for modal (contact_form) -->
	<link rel="stylesheet" href="styles/modals/contact_us/style.css">
</head>
<body>
	<div class="modal_contact-us">
		<div class="modal_contact-us-body">
		<div class="modal_contact-us-body-cross"><img src="images/cross.svg" alt="" onclick="popupHouseHide('.modal_contact-us')"></div>
			<div class="modal_contact-us-body-picture">
				
			</div>
			<form class="modal_contact-us-body-content">
				<h1 class="modal_contact-us-title">
					Новая Иберия
				</h1>
				<h1 class="modal_contact-us-text">
					Оставьте заявку на детальное обсуждение проекта
				</h1>
				<h2 class="modal_contact-us-description">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
				</h2>
				<div class="modal_contact-us-form">
					<input type="text" class="modal_contact-us_placeholder" placeholder="Ваше имя">
					<input type="text" class="modal_contact-us_placeholder" placeholder="Ваш телефон">
					<input type="text" class="modal_contact-us_placeholder" placeholder="Ваша почта">
					<textarea name="" id="modal_contact-us_textarea" cols="30" rows="10" placeholder="Комментарий"></textarea>
					<input type="submit" class="modal_contact-us_submit">
				</div>
				<h3 class="modal_contact-us-data">				
					Нажимая на кнопку. Вы принимаете условия обработки персональных данных
				</h3>
			</form>
		</div>
	</div>
	<div class="modal_house">
		<div class="modal_house__body">
			<div class="modal_house__close">
				<img src="images/cross.svg" alt="" onclick="popupHouseHide('.modal_house')">
			</div>
			<div class="modal_house__slider">
				<div class="modal_house__slider-text">
					<h1 class="modal_house__text-logo">
						Новая Иберия
					</h1>
					<h1 class="modal_house__project-name">
						
					</h1>
					<h2 class="modal_house__project-description">
						
					</h2>
				</div>
				<div class="modal_house__slider-opacity"></div>
				<div class="modal_house__slider-arrows">
					<div class="modal_house__slider-arrow-left"></div>
					<div class="modal_house__slider-arrow-right" onclick="sliderLeft('.modal_house__slider-line', '.modal_house__slider')"></div>
				</div>
				<div class="modal_house__slider-line">

				</div>
			</div>
			<div class="modal_house_content">
				<img src="images/plan_example.png" class="modal_house_planing">
				<div class="modal_house_content-info">
					<div class="modal_house_content-main-info">
						<div class="modal_house_content-main-item">
							<h1 class="modal_house_content-main-item_title">
								<span id="house_square"></span>кв.м.
							</h1>
							<h2 class="modal_house_content-main-item_text">
								Площадь дома
							</h2>
						</div>
						<div class="modal_house_content-main-item">
							<h1 class="modal_house_content-main-item_title">
								2 комнаты
							</h1>
							<h2 class="modal_house_content-main-item_text">
								Жилые комнаты
							</h2>
						</div>
					</div>
					<div class="modal_house_content-main-info">
						<div class="modal_house_content-main-item">
							<img src="images/advantages/electricity.svg" alt="" class="modal_house_content-main-image">
							<h2 class="modal_house_content-main-adv_text">
								Площадь дома
							</h2>
						</div>
						<div class="modal_house_content-main-item">
							<img src="images/advantages/electricity.svg" alt="" class="modal_house_content-main-image">
							<h2 class="modal_house_content-main-adv_text">
								Жилые комнаты
							</h2>
						</div>
						<div class="modal_house_content-main-item">
							<img src="images/advantages/electricity.svg" alt="" class="modal_house_content-main-image">
							<h2 class="modal_house_content-main-adv_text">
								Жилые комнаты
							</h2>
						</div>
					</div>
					<h2 class="modal_house_content-description">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate cumque error ab perspiciatis quibusdam, repellat ratione minima inventore tempora, ea illum suscipit laudantium ipsum deleniti sed unde esse fugiat rerum, similique dolor culpa saepe. Nisi facilis doloribus sint possimus odio. 
					</h2>
					<div class="modal_house_button">
						Связаться с нами
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header">
		<div class="header-menu">
			<div class="header-menu__body">
				<div class="header-menu__logo-block">
					<img src="images/logo.svg" alt="" class="header-menu__logo">
					<h1 class="header-menu__text-logo">Новая Иберия</h1>
				</div>
				<div class="header-menu__menu-block">
					<a href="#"><h1 class="header__menu-item">Новости</h1></a>
					<a href="#"><h1 class="header__menu-item">Акции</h1></a>
					<a href="#"><h1 class="header__menu-item">О проекте</h1></a>
					<a href="#"><h1 class="header__menu-item">Контакты</h1></a>
				</div>
				<div class="header-menu__button-more">
					<div class="header-menu__button">
						Узнать поподробнее
					</div>
				</div>
			</div>
		</div>
		<div class="header-hidden-menu">
			<div class="header-menu-hidden-mobile">
				<div class="header-menu-mobile-body">
					<div class="logo-mobile">
						<img src="images/logo.svg" alt="" class="logo-mobile-pic">
						Новая Иберия
					</div>
					<img src="images/mobile_cross.svg" alt="" class="header-menu-burger" onclick="menuHiddenSlideUp()">
				</div>
			</div>
			<div class="header-menu-mobile-menu">
				<h1 class="heaedr-menu-mobile-menu-item">Новости</h1>
				<h1 class="heaedr-menu-mobile-menu-item">Акции</h1>
				<h1 class="heaedr-menu-mobile-menu-item">О поселке</h1>
				<h1 class="heaedr-menu-mobile-menu-item">Контакты</h1>
				<div class="header-menu__button-mobile">
					Узнать подробнее
				</div>
			</div>
		</div>
		<div class="header-menu-mobile">
			<div class="header-menu-mobile-body">
				<div class="logo-mobile">
					<img src="images/logo.svg" alt="" class="logo-mobile-pic">
					Новая Иберия
				</div>
				<img src="images/burger.svg" alt="" class="header-menu-burger" onclick="menuHiddenSlideUp()">
			</div>
		</div>
		<div class="header_slider">
			
		</div>
		<div class="header-panel">
			<div class="header-panel__body">
				<div class="header-panel__title">
					<h1 class="header-panel__title-text">
						Котттеджный поселок Новая Иберия
					</h1>
					<h2 class="header-panel__title-description">
						Мы выбрали для вас проекты домов, ориентируясь на многолетний опыт лучших канадских архитекторов.
					</h2>
					<div class="header-menu__button">
						Перейти в галерею
					</div>
					<div class="header-panel__seasons">
						<div class="season_panel" id="spring">
							Весна
							<div class="season_line" id="spring_line"></div>
						</div>
						<div class="season_panel" id="summer">
							Лето
							<div class="season_line" id="summer_line"></div>
						</div>
						<div class="season_panel selected_div" id="autumn">
							Осень
							<div class="season_line selected_line" id="autumn_line"></div>
						</div>
						<div class="season_panel" id="winter">
							Зима
							<div class="season_line" id="winter_line"></div>
						</div>
					</div>
					<div class="header-panel__arrow-left-body">
						<div class="header-panel__arrow-left">
							
						</div>
					</div>
					<div class="header-panel__arrow-right-body">
						<div class="header-panel__arrow-right" onclick="sliderLeft('.slider_feed', '.header')">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-menu__button-mobile" id="button-mobile-separate">
		Перейти в галерею
	</div>
	<div class="text-block">
		<div class="text-block__body">
			<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 		aliqua. <br class="br-mobile">
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
				dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
				sunt in culpa qui officia deserunt mollit anim id est laborum </p>
		</div>
	</div>
	<div class="slider_mini">
		<div class="slider-mini_big-item" id="big_slide1" >
			
		</div>
		<div class="slider-mini_small-item" onclick='miniSliderLeft()'>
			<div class="slider-mini_small-arrow-body">
				<div class="slider-mini_small-arrow">
					
				</div>
			</div>
			<div class="slider-mini_small-item_back">
				
			</div>
		</div>
	</div>
	<div class="advantage_list_body">
		<div class="advantage_list">
			<h1 class="block_title advantage_list_title">
				Все условия для комфортной жизни
			</h1>
			<div class="advantages_list__advantages">
				<div class="advantage_item">
					<img src="images/advantages/location.svg" class="advantage_pic" alt="">
					<h1 class="advantage_name">Доступность</h1>
					<h2 class="advantage_description">Поселок 120км от Москвы</h2>
				</div>
				<div class="advantage_item">
					<img src="images/advantages/gasoline.svg" class="advantage_pic" alt="">
					<h1 class="advantage_name">Газоснабжение</h1>
					<h2 class="advantage_description">Все для Вашего комфорта</h2>
				</div>
				<div class="advantage_item second_item_portrait">
					<img src="images/advantages/electricity.svg" class="advantage_pic" alt="">
					<h1 class="advantage_name">Электричество</h1>
					<h2 class="advantage_description">Мы заботимся о жителях</h2>
				</div>
				<div class="advantage_item second_col_item second_item_portrait">
					<img src="images/advantages/security.svg" class="advantage_pic" alt="">
					<h1 class="advantage_name">Охраняемая территория</h1>
					<h2 class="advantage_description">Пост охраны при въезде</h2>
				</div>
				<div class="advantage_item second_col_item second_item_portrait">
					<img src="images/advantages/wifi.svg" class="advantage_pic" alt="">
					<h1 class="advantage_name">Интернет</h1>
					<h2 class="advantage_description">Будьте на связи даже в лесу</h2>
				</div>
				<div class="advantage_item second_col_item second_item_portrait">
					<img src="images/advantages/fishing.svg" class="advantage_pic" alt="">
					<h1 class="advantage_name">Рыбалка</h1>
					<h2 class="advantage_description fishing_description">Комфортные места для рыбалки с мангалом</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="slider_mini">
		<div class="slider-mini_small-item">
			<div class="slider-mini_small-arrow-body">
				<div class="slider-mini_small-arrow">
					
				</div>
			</div>
			<div class="slider-mini_small-item_back">
				
			</div>
		</div>
		<div class="slider-mini_big-item">
			
		</div>
	</div>
	<div class="showcase_discounts">
		<div class="showcase_title-block">
			<h1 class="block_title showcase_title">
				Скидка 10% при покупке до завершения строительства
			</h1>
			<div class="showcase_calendar">
				<div class="datepicker-here" onclick="kek()">
					<div class="discoint_desk">
						<h1 class="discount_day_name">В этот день скидки нет, попробуйте выбрать другой день</h1>
					</div>
				</div>
				<img src="images/calendar.svg" alt="" class="showcase_calendar_pic">
				<h1 class="showcase_calendar_text">
					Узнать праздничные скидки:
				</h1>
			</div>
		</div>
		<div class="showcase-body">
			<div class="showcase-item">
				<div class="showcase-item__image">
					<div class="showcase-item__discount">
						15%
					</div>
				</div>
				<h1 class="showcase-item__title">
					Площадь дома - 115 кв. м <br>
					Цена за кв. м - 50.000 ₽
				</h1>
				<h2 class="showcase-item__description">
					Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae, reprehenderit quas, laudantium consequuntur a quisquam natus similique facere debitis aperiam numquam libero ducimus dolor esse, enim cum odio, adipisci maiores ad accusamus quaerat obcaecati nobis quidem aliquid? Quia, vel officiis repudiandae excepturi? Minus, laboriosam, eius. Iste enim blanditiis temporibus molestiae!
				</h2>
				<div class="showcase-item__button" onclick="popupHouse('.modal_house')">
					Подробнее
				</div>
			</div>
		</div>
		<div class="showcase-more">
			<h1 class="showcase-more__text" onclick="moreHouses()">
				Загрузить еще
			</h1>
		</div>
	</div>

	<div class="genplan-body">
		<div class="genplan">
			<div class="genplan_text">
				<h1 class="block_title genplan_title">
					Узнайте подробную информацию о Вашем будущем участке  
				</h1>
				<div class="genplan-item__button ">
					Больше об участках
				</div>
				<div class="genplan_yt">
					<div class="genplan_open_video"></div>
					<h2 class="genplan_yt-text">
						Или посмотрите на поселок с высоты птичьего полета
					</h2>
				</div>
			</div>
			<img src="images/genplan.png" alt="" class="genplan_pic">
		</div>
	</div>

	<div class="map">
		<!-- <div class="map__cover-image"></div>
		<div class="map__cover"></div>
		<div class="map__controls">
			<img src="images/touch.svg" alt="" class="map__controls-touch">
			<h1 class="map__controls-text">
				Наведите, чтобы <br> взаимодествовать с картой.
			</h1>
		</div> -->
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4bf3925b1eafc08015bc6b88f55b6cbb57078238880e0077641774b531e53af7&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
	</div>

	<div class="news">
		<h1 class="block_title news_title">
			Последние<font style="color: #232323;">_</font>новости
		</h1>
		<div class="news_line">
			<div class="news_item news_item-mobile">
				<div class="news_item-image">
					
				</div>
				<h1 class="news_item-date">
					04.03.2021
				</h1>
				<h1 class="news_item-title">
					Заголовок статьи здесь
				</h1>
				<h2 class="news_item-description">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. 
				</h2>
				<h3 class="news_item-more">
					читать далее >
				</h3>
			</div>
			<div class="news_item">
				<div class="news_item-image">
					
				</div>
				<h1 class="news_item-date">
					04.03.2021
				</h1>
				<h1 class="news_item-title">
					Заголовок статьи здесь
				</h1>
				<h2 class="news_item-description">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. 
				</h2>
				<h3 class="news_item-more">
					читать далее >
				</h3>
			</div>
			<div class="news_item">
				<div class="news_item-image">
					
				</div>
				<h1 class="news_item-date">
					04.03.2021
				</h1>
				<h1 class="news_item-title">
					Заголовок статьи здесь
				</h1>
				<h2 class="news_item-description">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. 
				</h2>
				<h3 class="news_item-more">
					читать далее >
				</h3>
			</div>
		</div>
	</div>
	<div class="news_more">
		<h1 class="news_more">
			Больше новостей
		</h1>
	</div>
	<div class="footer">
		<div class="footer-body">
			<div class="footer-left">
				<h1 class="block_title footer_title">
					Возникли вопросы?
				</h1>
				<h2 class="footer-left-description1">
					Оставьте заявку мы свяжемся с Вами и все подробно расскажем!
				</h2>
				<h2 class="footer-left-description2">
					Также Вы можете подробнее узнать о поселке в Instagram
				</h2>
				<img src="images/inst.svg" alt="" class="footer-left_inst">
				<div class="footer-left__bottom">
					<img src="images/back_top.svg" alt="" class="back_top">
					<h1 class="header-menu__text-logo">Новая Иберия</h1>
					<h2 class="copyright">
						© New-iberia.ru 2020 Все права защищены.
					</h2>
				</div>
			</div>
			<form action="" class="footer-right">
				<input type="text" class="footer_placeholder" placeholder="Ваше имя">
				<input type="text" class="footer_placeholder" placeholder="Ваш телефон">
				<input type="text" class="footer_placeholder" placeholder="Ваша почта">
				<textarea name="" id="footer_textarea" cols="30" rows="10" placeholder="Комментарий"></textarea>
				<input type="submit" class="footer_submit">
			</form>
		</div>
	</div>
<script>
	$( document ).ready(function(){
	  function linkUnderline(link, line){
	  	 $(link).hover(function(){	
		   		$(line).animate({
			      width: "80px", // ширина элемента
			    });
		    }, function(){ // задаем функцию, которая срабатывает, когда указатель выходит из элемента 	
		   		$(line).animate({
			      width: "50px", // ширина элемента
			    });
		  });
	  }
	  linkUnderline("#spring", "#spring_line");
	  linkUnderline("#summer", "#summer_line");
	  linkUnderline("#autumn", "#autumn_line");
	  linkUnderline("#winter", "#winter_line");
	});
</script>
<script> 
	$(".header_slider").load("template/slider/spring.html");
	$( "#summer" ).click(function(){
		$(".header_slider").load("template/slider/summer.html");
	});
	$( "#winter" ).click(function(){
		$(".header_slider").load("template/slider/winter.html");
	});
</script>
<script>
	function sliderLeft(feed, block){
		var posleft = $(feed).position();
		var position = -(posleft.left);
		var widthh = $(block).width();
		var width = $(feed).width()-widthh-10;
		if (width>position) {	
			$(feed).animate({
				left: "-=100%",
			});
		} else {
			$(feed).animate({
				left: "+="+position+"px",
	    	});
	    }
	} 
	function menuHiddenSlideUp(){
		$('.header-hidden-menu').slideToggle();
	}
	function checkId(){
		var clickId = $(this).attr('id');
	}
	function popupHouse(modal, id){
		$(modal).fadeIn();
		id = Number.parseInt(id.replace('button_showcase', ''));
		$.ajax({
				url: 'handlers/house_popup.php',
				method: 'post',
				data: {text: id},
				success: function(data){
					var answer = JSON.parse(data);
					$('#house_square').html(answer.square_house);
					$('.modal_house__project-description').html(answer.small_description);
					$('.modal_house__project-name').html(answer.project_name);

					var all_slides_modal = '';
					for (var i = 0; i < answer.links.length; i++) {
						all_slides_modal='<div class="modal_house__slider-item" style="background-image: url('+ answer.links[i].link +');"></div>' + all_slides_modal;
					}
					$('.modal_house__slider-line').html(all_slides_modal);
				}
			});
	}
	function popupHouseHide(modal){
		$(modal).fadeOut();
	}
	function moreHouses() {
			$.ajax({
				url: 'handlers/houses_filter.php',
				method: 'post',
				data: $(this).serialize(),
				success: function(data){
					var answer = JSON.parse(data);
					var kekable = "";
					for (var i = 0; i < answer.length; i++) {
						var kekmeksmek = '".modal_house"';
						var kekable = "<div class='showcase-item'><div class='showcase-item__image' style='background-image: url("+answer[i].preview_image+");'><div class='showcase-item__discount'>15%</div></div><h1 class='showcase-item__title'>Площадь дома - "+ answer[i].square_house +" кв. м <br>Цена - "+answer[i].price+" ₽</h1><h2 class='showcase-item__description'>"+ answer[i].small_description +"</h2><div class='showcase-item__button' id='button_showcase"+answer[i].id+"' onclick='popupHouse("+kekmeksmek+", this.id)'>Подробнее</div></div>" + kekable;
					}
					$('.showcase-body').html(kekable);
				}
			});
			$('.showcase-more__text').hide();
		}
</script>
<script>
	  	 $('.slider-mini_small-item_back').hover(function(){	
		   		$(this).addClass('slider-mini_small-item_hover');
		   		$('.slider-mini_small-item').animate({
					width: "28%",
					height: "100%",
				});
		    }, function(){	
		   		$(this).removeClass('slider-mini_small-item_hover');
		   		$('.slider-mini_small-item').animate({
					width: "25%",
					height: "90%",
				});
		  });
</script>
<script>
	$(document).ready(function() {
		$.ajax({
			url: 'handlers/houses_filter.php',
			method: 'post',
			data: $(this).serialize(),
			success: function(data){
				var answer = JSON.parse(data);
				var kekable = "";
				for (var i = 0; i < 3  ; i++) {
					var kekmeksmek = '".modal_house"';
						var kekable = "<div class='showcase-item'><div class='showcase-item__image' style='background-image: url("+answer[i].preview_image+");'><div class='showcase-item__discount'>15%</div></div><h1 class='showcase-item__title'>Площадь дома - "+ answer[i].square_house +" кв. м <br>Цена - "+answer[i].price+" ₽</h1><h2 class='showcase-item__description'>"+ answer[i].small_description +"</h2><div class='showcase-item__button' id='button_showcase"+answer[i].id+"' onclick='popupHouse("+kekmeksmek+", this.id)'>Подробнее</div></div>" + kekable;
				}
				$('.showcase-body').html(kekable);
			}
		});
	});
</script>
<script src="scripts/calendar_settings.js"></script>
<!-- <script>
	$( document ).ready(function(){
		var monitor_size = $(window).width();
		alert(monitor_size)
		if(monitor_size>1200) {
		 $('.map').hover(function(){	
		   		$('.map__cover').fadeOut();
		   		$('.map__controls').fadeOut();
		   		$('.map__cover-image').fadeOut();
		    }, function(){
		   		$('.map__cover').fadeIn();
		   		$('.map__controls').fadeIn();
		   		$('.map__cover-image').fadeIn();
		  });
		}
	});
</script>
 -->
</body>
</html>