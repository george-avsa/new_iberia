<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Новая Иберия</title>
	<link rel="icon" href="images/logo.svg" type="image/x-icon">
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

	<!-- styles for modal -->
	<link rel="stylesheet" href="styles/modals/news_one/style.css">

	<!-- яндекс метрика -->
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(74721436, "init", {
	        clickmap:true,
	        trackLinks:true,
	        accurateTrackBounce:true,
	        webvisor:true
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/74721436" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
</head>
<body>
	<div class="modal_contact-us">
		<div class="modal_contact-us-body">
		<div class="modal_contact-us-body-cross"><img src="images/cross.svg" alt="" onclick="popupHouseHide('.modal_contact-us')"></div>
			<div class="modal_contact-us-body-picture">
				<div class="modal_contact-us_picture"></div>
				<div class="modal_contact-us_opacity"></div>
			</div>
			<form class="modal_contact-us-body-content" action="" method="post">
				<h1 class="modal_contact-us-title">
					Новая Иберия
				</h1>
				<h1 class="modal_contact-us-text">
					Оставьте заявку, мы ответим Вам в ближайшее время!
				</h1>
				<h2 class="modal_contact-us-description">
					Если у Вас возникли какие-то вопросы, можете заказать звонок, либо <a href="tel:89773263306" style="color: #00A550">позвонить нам</a>!
				</h2>
				<div class="modal_contact-us-form">
					<input type="text" class="modal_contact-us_placeholder" placeholder="Ваше имя" maxlength="10" name="name">
					<input type="text" class="modal_contact-us_placeholder" placeholder="Ваш телефон" maxlength="17" name="telephone">
					<input type="text" class="modal_contact-us_placeholder" placeholder="Ваша почта" maxlength="18" name="email">
					<textarea name="" id="modal_contact-us_textarea" cols="30" rows="10" placeholder="Комментарий" maxlength="50" name="comment"></textarea>
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
					<div class="modal_house__slider-arrow-left" onclick="sliderRight('.modal_house__slider-line')"></div>
					<div class="modal_house__slider-arrow-right" onclick="sliderLeft('.modal_house__slider-line', '.modal_house__slider')"></div>
				</div>
				<div class="modal_house__slider-line">

				</div>
			</div>
			<div class="modal_house_content">
				<img src="images/house_planes/72.svg" class="modal_house_planing">
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
							<img src="images/advantages/gasoline.svg" alt="" class="modal_house_content-main-image">
							<h2 class="modal_house_content-main-adv_text">
								Газоснабжение
							</h2>
						</div>
						<div class="modal_house_content-main-item">
							<img src="images/advantages/electricity.svg" alt="" class="modal_house_content-main-image">
							<h2 class="modal_house_content-main-adv_text">
								Электричество
							</h2>
						</div>
						<div class="modal_house_content-main-item">
							<img src="images/house.svg" alt="" class="modal_house_content-main-image">
							<h2 class="modal_house_content-main-adv_text" id="modal_house_content-bedroom">
								
							</h2>
						</div>
					</div>
					<h2 class="modal_house_content-description">
						
					</h2>
					<div class="modal_house_button" id="modal_house_button" onclick="closeAndOpenAlert()">
						Связаться с нами
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal_news_one">
		<div class="modal_news-body">
			<div class="modal_news-body-cross"><img src="images/cross.svg" alt="" onclick="popupHouseHide('.modal_news_one')"></div>
			<div class="modal_news_one-body-picture">
				<div class="modal_news_one-picture-bidy"></div>
				<div class="modal_news_one-opacity"></div>
				<div class="modal_news_one-texts">
					<div class="modal_news_one-texts_body">
						<h1 class="modal_news_one-texts_body_news-title"></h1>
						<h2 class="modal_news_one-texts-date">
							
						</h2>
					</div>
				</div>
			</div>
			<div class="modal_news_one-body-content">
				<div class="modal_news_one-body-content_body">
					<div class="kekmemshmek">
					

					</div>
					<div class="modal_news-footer">
						<div class="modal_news-footer_read_more">Читать также</div>
						<div class="modal_news-footer-line"></div>
					</div>
					<div class="modal_news-recomended">
						
					</div>
					<div class="modal_news-recomended_more">
						<h1 class="modal_news-recomended_more-text">
							Больше...
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header" id="header">
		<div class="header-menu">
			<div class="header-menu__body">
				<div class="header-menu__logo-block">
					<img src="images/logo.svg" alt="" class="header-menu__logo">
					<h1 class="header-menu__text-logo">Новая Иберия</h1>
				</div>
				<div class="header-menu__menu-block">
					<a href="news.html"><h1 class="header__menu-item">Новости</h1></a>
					<a href="#showcase_discounts"><h1 class="header__menu-item">Акции</h1></a>
					<a href="#advantage_list_body"><h1 class="header__menu-item">О проекте</h1></a>
					<a href="#footer"><h1 class="header__menu-item">Контакты</h1></a>
				</div>
				<div class="header-menu__button-more">
					<div class="header-menu__button" id="header-menu__button_modal">
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
				<a href="news.html"><h1 class="heaedr-menu-mobile-menu-item">Новости</h1></a>
				<h1 class="heaedr-menu-mobile-menu-item" onclick="mobileAnchor('#showcase_discounts')">Акции</h1>
				<h1 class="heaedr-menu-mobile-menu-item" onclick="mobileAnchor('#advantage_list_body')">О поселке</h1>
				<div class="header-menu__button-mobile_phone" id="header-menu__button-mobile">
					Узнать подробнее
				</div>
				<a href="tel:+79773263306"><div class="header-menu__button-mobile_phone">
					Позвонить
				</div></a>
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
		<div class="header-opacity_slider">
			
		</div>
		<div class="header-panel">
			<div class="header-panel__body">
				<div class="header-panel__title">
					<h1 class="header-panel__title-text">
						Коттеджный поселок Новая Иберия
					</h1>
					<h2 class="header-panel__title-description">
						Комфорт | Качество | Экология
					</h2>
					<div class="header-menu__button" style="display: none;">
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
						<!-- <div class="season_panel" id="autumn">
							Осень
							<div class="season_line" id="autumn_line"></div>
						</div> -->
						<div class="season_panel selected_div" id="winter">
							Зима
							<div class="season_line selected_line" id="winter_line"></div>
						</div>
					</div>
					<div class="header-panel__arrow-left-body" onclick="sliderRight('.slider_feed')">
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
			<p align="justify">«Новая Иберия» – уникальный и современный коттеджный поселок в Калужской области, расположенный всего в 114 км от Москвы по Киевскому или Калужскому шоссе в Малоярославецком районе. Поселок уютно располагается в обширном массиве хвойного и смешанного лесов, по границе поселка протекает река Суходрев. Поселок хорошо вписан в природное окружение. </p>
		</div>
	</div>
	<div class="slider_mini">
		<div class="slider-mini_big-item" id="big_slide1" >
			
		</div>
		<div class="slider-mini_small-item" id='slider-mini_small-item_top'>
			<div class="slider-mini_small-arrow-body" id='slider-mini_small-arrow-body_top'>
				<div class="slider-mini_small-arrow">
					
				</div>
			</div>
			<div class="slider-mini_small-item_back"  id='slider-mini_small-item_back_top'>
				
			</div>
		</div>
	</div>
	<div class="text-block">
		<div class="text-block__body">
			<p align="justify">У нас вы можете купить участок земли с домом для ИЖС, либо без подряда на строительство. Мы также готовы помочь вам в строительстве дома по индивидуальному или типовому проекту. Продуманный до мелочей план с застройки поселка в совокупности с экологически комфортной средой позволит вам насладиться сполна преимуществами жизни вне города, вне зависимости от расположения земельного участка возле леса или в центре поселка</p>
		</div>
	</div>
	<div class="advantage_list_body" id="advantage_list_body">
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
	<div class="slider_mini" id="slider_mini_bot">
		<div class="slider-mini_small-item" id='slider-mini_small-item_down'>
			<div class="slider-mini_small-arrow-body" id="slider-mini_small-arrow-body_bottom">
				<div class="slider-mini_small-arrow">
					
				</div>
			</div>
			<div class="slider-mini_small-item_back" id='slider-mini_small-item_back_down'>
				
			</div>
		</div>
		<div class="slider-mini_big-item">
			
		</div>
	</div>
	<div class="showcase_discounts" id="showcase_discounts">
		<div class="showcase_title-block">
			<h1 class="block_title showcase_title">
				Готовые решения
			</h1>
			<div class="showcase_calendar">
				<div class="datepicker-here">
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

	<div class="news" id="news">
		<h1 class="block_title news_title">
			Последние<font style="color: #232323;">_</font>новости
		</h1>
		<div class="news_line">
			
		</div>
	</div>
	<div class="news_more">
		<a href="news.html">
			<h1 class="news_more">
				Больше новостей
			</h1>
		</a>
	</div>
	<div class="footer" id="footer">
		<div class="footer-body">
			<div class="footer-left">
				<h1 class="block_title footer_title">
					Возникли вопросы?
				</h1>
				<h2 class="footer-left-description1">
					<span id="footer_link-contact_us">Оставьте заявку</span> мы свяжемся с Вами и все подробно расскажем!
				</h2>
				<h2 class="footer-left-description2">
					Также Вы можете подробнее узнать о поселке в Instagram
				</h2>
				<a href="https://www.instagram.com/new_iberia.ru/" target="_blank"><img src="images/inst.svg" alt="" class="footer-left_inst"></a>
				<div class="footer-left__bottom">
					<a href="#header"><img src="images/back_top.svg" alt="" class="back_top" ></a>
					<h1 class="header-menu__text-logo">Новая Иберия</h1>
					<h2 class="copyright">
						© New-iberia.ru 2020 Все права защищены.
					</h2>
				</div>
			</div>
			<form action="handlers/send_sms.php" class="footer-right">
				<input type="text" class="footer_placeholder" placeholder="Ваше имя" name="name" maxlength="10">
				<input type="text" class="footer_placeholder" placeholder="Ваш телефон" name="telephone" maxlength="17">
				<input type="text" class="footer_placeholder" placeholder="Ваша почта" name="email" maxlength="25">
				<textarea id="footer_textarea" cols="30" rows="10" placeholder="Комментарий" name="comment" maxlength="50"></textarea>
				<input type="submit" class="footer_submit">
			</form>
		</div>
	</div>
	<div class="alert_for_form">
		<span class="alert_form_text"></span>
		<div class="alert_bottom_line"></div>
	</div>
	<div class="alert_video">
		<iframe id="computer_video" width="560" height="315" src="https://www.youtube.com/embed/tKuvtFMLj64" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<iframe id="mobile_video" width="320" height="180" src="https://www.youtube.com/embed/tKuvtFMLj64" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

	$(function(){
		$("a[href^='#']").click(function(){
	    	var _href = $(this).attr("href");
	    	$("html, body").animate({scrollTop: $(_href).offset().top+"px"});
		   	return false;
		});
	});
</script>
<script> 
	$(".header_slider").load("template/slider/winter.html");
	$( "#summer" ).click(function(){
		$(".header_slider").load("template/slider/summer.html");
		$('.selected_div').removeClass('selected_div');
		$('.selected_line').removeClass('selected_line');
		$('#summer_line').addClass('selected_line');
		$(this).addClass('selected_div');
	});
	$( "#winter" ).click(function(){
		$(".header_slider").load("template/slider/winter.html");
		$('.selected_div').removeClass('selected_div');
		$('.selected_line').removeClass('selected_line');
		$('#winter_line').addClass('selected_line');
		$(this).addClass('selected_div');
	});
	$( "#spring" ).click(function(){
		$(".header_slider").load("template/slider/spring.html");
		$('.selected_div').removeClass('selected_div');
		$('.selected_line').removeClass('selected_line');
		$('#spring_line').addClass('selected_line');
		$(this).addClass('selected_div');
	});
	$( "#autumn" ).click(function(){
		$(".header_slider").load("template/slider/autumn.html");
		$('.selected_div').removeClass('selected_div');
		$('.selected_line').removeClass('selected_line');
		$('#autumn_line').addClass('selected_line');
		$(this).addClass('selected_div');
	});
</script>
<script>
	$('.genplan_open_video').click(function(){
	   var container = $(".alert_video");
	        container.fadeIn();
	});
	$(document).mouseup(function (e) {
	    var container = $(".alert_video");
	    if (container.has(e.target).length === 0){
	        container.fadeOut();
	    }
	});
</script>
<script src="scripts/functions.js"></script>
<script src="scripts/slider_mini.js"></script>
<script src="scripts/house_filter.js"></script>
<script src="libs/mask/jquery.mask.min.js"></script>
<script src="libs/mask/inputmask.js"></script>
<script> 
  $(document).ready(function(){   
    $("[name=email]").inputmask("email")
  });
</script>
<script src="scripts/send_form.js"></script>
<script src="scripts/news_filter.js"></script>
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
