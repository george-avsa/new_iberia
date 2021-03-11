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
	<script src="libs/jquery.js"></script>
</head>
<body>
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
			<!-- <h1 class="header-panel__title">
				Коттеджный поселок Новая Иберия
			</h1>
			<h1 class="header-panel__text">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
			</h1>
			<div class="header-panel__buttons">
				<div class="header-panel__li" id="spring">Весна <div id="spring_bottom" class="bottom_line"></div></div>
				<div class="header-panel__li" id="summer">Лето <div id="summer_bottom" class="bottom_line"></div></div>
				<div class="header-panel__li" id="autumn">Осень<div id="autumn_bottom" class="bottom_line"></div></div>
				<div class="header-panel__li" id="winter">Зима <div id="winter_bottom" class="bottom_line"></div></div>
				<img src="images/left.svg" alt="" class="header-panel___arrow" id="left_arrow">
				<img src="images/right.svg" alt="" class="header-panel___arrow" id="right_arrow" onclick="leftkek()">
			</div> -->
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
						<div class="header-panel__arrow-right" onclick="sliderLeft()">
							
						</div>
					</div>
				</div>
			</div>
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
</script>
<script>
	function sliderLeft(){
		var posleft = $('.slider_feed').position();
		var position = -(posleft.left);
		var widthh = $('.header').width();
		var width = $('.slider_feed').width()-widthh;
		if (width>position) {	
			$( ".slider_feed" ).animate({
				left: "-=100%",
			});
		} else {
			$( ".slider_feed" ).animate({
				left: "+="+position+"px",
	    	});
	    }
	}
	function menuHiddenSlideUp(){
		$('.header-hidden-menu').slideToggle();
	}
</script>
</body>
</html>