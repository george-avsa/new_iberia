<?php 
	require_once 'mail/phpmailer/PHPMailerAutoload.php';
	if (isset($_POST['send_mail_btn'])) {
		$mail = new PHPMailer;
		$mail->CharSet = 'utf-8';
		// // $email = $_POST['email'];

		// $user = R::findOne('users', 'email = ?', array($email));

		$mail->Host = 'smtp.timeweb.ru';
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'boss@ambassa.ru'; // email name(FROM)
		$mail->Password = 'Klimklim25112000'; // email password(FROM)
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, ssl also accepted
		$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

		$mail->setFrom('boss@ambassa.ru'); // email name(FROM)
		$mail->addAddress('crazzylama0@yandex.ru');     // email(TO) 
		$mail->isHTML(true);

		$mail->Subject = 'Письмо от Amba';
		$mail->Body = "Ваш ID в системе Амба";
		$mail->AltBody = '';


		$test = true;
		if(!$mail->send()) {
		    $test = false;
		}
	}	
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Новая Иберия - коттеджный посёлок</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="assets/css/custom_alert.css">
		<link rel="stylesheet" href="assets/css/animate.css">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="index is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
				
					<h1 id="logo"><a href="index.html">Новая Иберия</a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="index.html">Главная</a></li>
							<li class="current"><a href="index.html">Почему мы?</a></li>
							<li class="current"><a href="#genplan">Генплан</a></li>
							<li class="current"><a href="index.html">Контакты</a></li>
							<li><a href="#input_section" class="button primary">Заказать звонок</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner" style="padding: 0; margin: 0;">
					<div class="owl-carousel owl-theme" style="padding: 0; margin: 0;">
					    <div class="item" id="slider_1">
					    	<table class="table_bottom">
					    		<tr class="tr_bottom">
					    			<td class="td_bottom">
					    				<h5 style="font-family: 'Montserrat', sans-serif; margin: 0 auto; font-size: 20pt; margin-bottom: 20px;" class="wow bounceInLeft animate__delay-0s" id="slider_text"> 
											коттеджный посёлок <br> "новая иберия"
										</h5>
					    			</td>
					    		</tr>
					    	</table>
					    </div>
					    <div class="item" id="slider_2">
							<div class="header_margin">
					    	</div>
					    </div>
					    <div class="item" id="slider_3">
							<div class="header_margin"></div>
					    </div>
					    <div class="item" id="slider_4">
							<div class="header_margin"></div>
							
					    </div>
					</div>
				</section>

			<!-- Main -->
				<article id="main">

					

					<!-- One -->

					
										

						
					<!-- Two -->
						<section class="wrapper style1 container special" id="included_features_icons">
							<h5 style="font-family: 'Montserrat', sans-serif; margin: 0 auto;"> 
								Мы создали для Вас все условия:
							</h5><hr id="golden_hr">
							<div class="row"  style="margin-top: 20px;">
								<div class="col-4 col-12-narrower">
									
									<section>
										<div class="icon solid"><img src="svg/pin.svg" class="wow fadeIn animate__delay-0s" id="icon_page" data-wow-duration="4s"></div>
										<header style="margin-top: 5px;">
											<h3 style="font-family: 'Montserrat', sans-serif; margin-bottom: 5px;">Доступность</h3>
											<h4  style="font-family: 'Montserrat', sans-serif;">Всего 120 км. от Москвы</h4>
										</header>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<div class="icon solid"><img class="wow fadeIn" src="svg/gas.svg" id="icon_page"  data-wow-duration="4s" ></div>
										<header style="margin-top: 5px;">
											<h3 style="font-family: 'Montserrat', sans-serif; margin-bottom: 5px;">Газоснабжение</h3>
											<h4  style="font-family: 'Montserrat', sans-serif;">Все для Вашего кофморта!</h4>
										</header>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<div class="icon solid"><img class="wow fadeIn" src="svg/electricity.svg" data-wow-duration="4s" id="icon_page"></div>
										<header style="margin-top: 5px;">
											<h3 style="font-family: 'Montserrat', sans-serif; margin-bottom: 5px;">Электричество</h3>
											<h4  style="font-family: 'Montserrat', sans-serif;">Мы заботимся о Вас!</h4>
										</header>
									</section>

								</div>
							</div>
						</section>
						<section class="wrapper style1 container special" id="included_features_icons2">
							<div class="row">
								<div class="col-4 col-12-narrower">

									<section>
										<div class="icon solid"><img class="wow fadeIn" src="svg/security.svg" id="icon_page" data-wow-duration="4s" ></div>
										<header style="margin-top: 5px;">
											<h3 style="font-family: 'Montserrat', sans-serif; margin-bottom:0; ">Охраняемая</h3>
											<h3 style="font-family: 'Montserrat', sans-serif; margin-top: 0; margin-bottom: 5px;">территория</h3>
											<h4  style="font-family: 'Montserrat', sans-serif;">Пост охраны при въезде!</h4>
										</header>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<div class="icon solid"><img class="wow fadeIn" data-wow-duration="4s" src="svg/wifi.svg"  id="icon_page" ></div>
										<header style="margin-top: 5px;">
											<h3 style="font-family: 'Montserrat', sans-serif; margin-bottom: 5px;">Интернет</h3>
											<h4  style="font-family: 'Montserrat', sans-serif;">Будете на связи даже в лесу!</h4>
										</header>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<div class="icon solid"><img class="wow fadeIn" src="svg/fishing.svg" data-wow-duration="4s"  id="icon_page"></div>
										<header style="margin-top: 5px; text-align: center;">
											<h3 style="font-family: 'Montserrat', sans-serif; margin-bottom: 5px;">Рыбалка</h3>
											<h4  style="font-family: 'Montserrat', sans-serif; width: 60%; margin: 0 auto;">Комротные места для рыбалки с мангалом!</h4>
										</header>
									</section>

								</div>
							</div>
						</section>
					<!-- Three -->
						<section class="wrapper style3 container special" id="genplan">
							
							<header class="major">
								<h5 style="font-family: 'Montserrat', sans-serif;"> Здесь вы можете подробнее познакомится с нашим посёлком</b></h5>
								<hr id="golden_hr" style="opacity: 0.2; margin-bottom: 10px; width: 100%;">
							</header>
							<div id="genplan">
								<div id="svg_genplan">
									<svg viewBox="0 0 144.26 139.08" class="genplan_map">
										<path class="part1" id="red_part" fill="#BD6158"  d="m 9.0938959,109.71919 18.2766571,0.29621 0.05924,13.47793 -12.306942,-7.28612 z"></path>
										<path class="part2" id="red_part"  fill="#BD6158" d="m 32.583992,110.282 0.05924,9.06427 13.981495,0.0296 -0.05924,-8.85692 z"></path>
										<path class="part3" id="map_part" d="M 7.953125,109.14062 3.3125,104.35937 2.359375,100.3125 27.125,100.76562 l 0.15625,8.51563 z" onclick="alert_submit('3','19,26','963 000');"></path>
										<path class="part4" id="red_part" fill="#BD6158"  d="m 32.583992,101.21773 -0.02962,8.50146 14.099982,0.23697 v -8.47184 z"></path>
										<path class="part5" id="map_part" d="m 2.2539029,99.702056 -1.50260195,-6.408155 0.70710675,-2.364388 25.7210093,0.707106 0.08839,8.595771 z"  onclick="alert_submit('5','21,49','1 074 500');"></path>
										<path class="part6" id="red_part" fill="#BD6158"  d="m 32.583992,92.094209 v 8.531081 l 14.040738,0.35546 0.05924,-8.856919 z"></path>
										<path class="part7" id="map_part" d="m 3.5355339,81.935998 -2.0550291,8.41899 25.8093972,0.68501 -0.06629,-8.728349 z"  onclick="alert_submit('7','20,51','1 025 000');"></path>
										<path class="part8" id="red_part"  fill="#BD6158" d="m 32.583992,82.763339 v 8.797678 h 14.011116 l 0.08887,-8.531082 z"></path>
										<path class="part9" id="red_part" fill="#BD6158"  d="M 27.340931,81.785819 27.281688,73.077007 5.7762531,72.691923 3.6731045,81.459979 Z"></path>
										<path class="part10" id="map_part" d="m 46.875,82.484375 -14.25,-0.265625 0.01563,-8.578125 h 14.25 z"  onclick="alert_submit('10','12,01','600 500');"></path>
										<path class="part11" id="red_part" fill="#BD6158"  d="m 7.9978889,63.775758 -2.0142832,8.382973 21.2980823,0.296218 0.05924,-8.649569 z"></path>
										<path class="part12" id="map_part" d="m 46.875,72.90625 -14.25,0.1875 v -8.921875 l 14.234375,0.3125 z"  onclick="alert_submit('12','12,01','600 500');"></path>
										<path class="part13" id="red_part"  fill="#BD6158" d="m 10.189903,54.741106 -2.0439051,8.50146 H 27.281688 l 0.02962,-8.50146 z"></path>
										<path class="part14" id="map_part" d="M 46.9375,55.328125 46.890625,63.9375 32.609375,63.640625 32.78125,54.9375 Z" onclick="alert_submit('14','12,01','600 500');"></path>
										<path class="part15" id="red_part" fill="#BD6158"  d="m 12.58927,44.99553 -2.103149,8.856922 16.795567,0.266596 -0.05924,-8.649569 z"></path>
										<path class="part16" id="red_part"  fill="#BD6158"  d="m 32.643235,45.617588 0.118488,8.768056 14.129603,0.355462 0.02962,-8.708812 z"></path>
										<path class="part16" id="red_part" fill="#BD6158" d="m 379.23435,354.58182 v 65.89369 l 172.10697,4.83835 0.2304,-66.12409 z"></path>
										<path class="part17" id="red_part" fill="#BD6158"  d="M 12.885488,44.403094 29.76992,44.99553 29.740298,25.060052 24.793455,24.586103 Z"></path>
										<path class="part18" id="red_part" fill="#BD6158"  d="m 30.27349,25.119295 0.05924,19.846614 16.647458,0.50357 -0.05924,-18.454388 z"></path>
										<path class="part19" id="map_part" d="m 61.584581,128.49456 -14.473592,0.0442 -0.0221,-8.52947 14.451495,0.22097 z" onclick="alert_submit('19','13,11','565 500');"></path>
										<path class="part20" id="red_part" fill="#BD6158"  d="m 61.613366,119.70174 -14.366578,-0.35547 -0.05924,-8.76805 h 14.336957 z"></path>
										<path class="part21" id="map_part" d="m 37.078912,128.60505 -4.507806,-4.72878 0.0221,-3.93328 13.899068,0.0442 0.06629,8.52948 z"  onclick="alert_submit('2-1','11,36','568 000');"></path>
										<path class="part22" id="map_part" d="m 786.57721,787.95959 134.55216,1.84318 -97.42777,206.10069 h -39.58851 z"></path>
										<path class="part23" id="red_part"  fill="#BD6158" d="m 47.157923,109.92654 0.08887,-8.38297 14.307334,0.38508 v 8.08675 z"></path>
										<path class="part25" id="red_part"  fill="#BD6158" d="m 47.187544,101.01037 14.3962,0.29622 -0.177731,-8.70881 -14.159225,-0.503571 z"></path>
										<path class="part26" id="map_part" d="M 79.53125,96.59375 80.6875,83.875 66.96875,83.90625 67,96.25 Z"onclick="alert_submit('26','16,26','813 000');"></path>
										<path class="part27" id="red_part"  fill="#BD6158" d="m 47.217166,91.561017 -0.03679,-8.552878 14.400226,0.293241 -0.209458,8.734391 z"></path>
										<path class="part28" id="map_part" d="m 67.03125,74.875 v 8.40625 L 80.75,83.3125 l 0.5625,-8.5 z"onclick="alert_submit('28','12,32','616 000');"></path>
										<path class="part29" id="map_part" d="M 61.562484,82.775687 47.442446,82.488425 47.530834,73.627493 61.51829,73.95895 Z"onclick="alert_submit('29','12,01','600 500');"></path>
										<path class="part30" id="red_part" fill="#BD6158"  d="m 66.754211,65.371789 15.709337,0.02095 -0.879723,8.860066 -14.787722,0.08378 z"></path>
										<path class="part31" id="map_part" d="m 47.420348,64.523494 v 8.595766 l 14.164233,0.30936 v -8.595767 z"onclick="alert_submit('31','12,01','600 500');"></path>
										<path class="part32" id="map_part" d="m 66.8125,64.8125 v -8.71875 l 16.375,0.3125 -0.78125,8.46875 z"onclick="alert_submit('32','13,62','681 000');"></path>
										<path class="part33" id="map_part" d="m 47.420348,63.948969 0.0442,-8.551572 14.252621,0.265165 -0.132583,8.551572 z"onclick="alert_submit('33','12,01','600 500');"></path>
										<path class="part34" id="map_part" d="m 83.21875,55.75 -16.4375,-0.25 -0.0149,-8.333768 17.379359,0.209922 z"onclick="alert_submit('34','14,31','715 500');"></path>
										<path class="part35" id="red_part" fill="#BD6158"  d="m 47.546928,54.773223 -0.04189,-8.734392 14.243133,0.502699 v 8.54588 z"></path>
										<path class="part36" id="map_part" d="M 64.5,28.71875 85.40625,31.15625 84.21875,46.8125 67,46.625 v -0.65625 h -2.5 z"onclick="alert_submit('36','31,29','1 564 500');"></path>
										<path class="part37" id="red_part" fill="#BD6158"  d="m 47.513384,45.499101 16.35124,0.444327 0.02962,-17.269515 -16.262375,-1.658822 z"></path>
										<path class="part38" id="map_part" d="M 110.09375,97.375 110.75,84.1875 133.625,84.5 l -0.4375,5.28125 -14.35938,7.578125 z"onclick="alert_submit('38','24','1 200 000');"></path>
										<path class="part39" id="map_part" d="m 103.8125,97 -23.65625,-0.4375 1.125,-12.75 23.46875,0.21875 z"onclick="alert_submit('39','28,35','1 417 500');"></path>
										<path class="part40" id="map_part" d="M 135,72.03125 133.75,83.84375 110.78125,83.5625 111.59375,72 Z" onclick="alert_submit('40','26,61','1 330 500');"></path>
										<path class="part41" id="map_part" d="m 81.25,83.28125 1.1875,-11.375 23.4375,0.03125 -1.03125,11.53125 z" onclick="alert_submit('41','25,96','1 298 000');"></path>
										<path class="part42" id="map_part" d="m 133.79786,83.902639 1.19324,-11.888233 -23.40081,-0.04419 -0.86179,11.600971 z" onclick="alert_submit('42','26,36','1 318 000');"></path>
										<path class="part43" id="map_part" d="m 105.9375,71.3125 0.75,-11.53125 -23.15625,-0.34375 -1.125,11.90625 z" onclick="alert_submit('43','25,49','1 274 500');"></path>
										<path class="part44" id="map_part" d="M 136.125,59.75 135.78125,48 113.25,47.65625 112.46875,59.3125 Z" onclick="alert_submit('44','26,10','1 305 000');"></path>
										<path class="part45" id="map_part" d="m 106.75,59.25 0.875,-11.28125 -22.875,-0.625 -1.125,11.5625 z" onclick="alert_submit('45','25,58','1 279 000');"></path>
										<path class="part46" id="map_part" d="m 135.625,47.40625 0.125,-15.4375 -21.34375,-0.40625 -1.0625,15.625 z" onclick="alert_submit('46','32,41','1 620 500');"></path>
										<path class="part47" id="map_part" d="m 107.59375,47.375 1.125,-15.78125 L 86.125,31.125 84.78125,46.71875 Z" onclick="alert_submit('47','33,29','1 664 500');"></path>
										<path class="part48" id="red_part" fill="#BD6158" d="m 115.34733,17.802708 -0.91828,13.152084 21.23884,0.355462 -0.29622,-13.181706 z"></path>
										<path class="part49" id="red_part"  fill="#BD6158" d="m 86.3772,30.59933 21.44619,-21.9645722 2.56229,-1.3922251 -1.6292,23.7418813 z"></path>
										<path class="part50" id="red_part" fill="#BD6158"  d="m 116.35447,3.9693226 4.91114,-2.7439943 21.54274,-0.38749697 -7.48288,12.56223367 0.0733,4.152501 -20.01884,-0.322362 z"></path>
									</svg>
									<img src="images/genplan.svg" class="svg_genplan_">
								</div>
							</div><hr id="golden_hr" style="margin-top: 30px;">
							<h4  style="font-family: 'Montserrat', sans-serif; width: 90%; margin: 0 auto; font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia rerum et sint ipsam adipisci recusandae qui minus velit itaque, voluptatibus mollitia dolor aut hic perspiciatis unde ducimus ut. Ex ad dolorum molestias voluptatum suscipit accusamus aliquam obcaecati libero ab in impedit hic nam tenetur id maiores, deserunt nisi aliquid distinctio!</h4>
							<footer class="major">
								<a href="pdf/genplan.pdf" target="_blank">
									<div id="button_genplan">
										<table class="table_middle">
											<tr class="tr_middle">
												<td class="td_middle">
													ПОДРОБНЕЕ
												</td>
											</tr>
										</table>
									</div>
								</a>
							</footer>

						</section>
							
						<section class="wrapper container special " id="video_panroama">
							<h5 style="font-family: 'Montserrat', sans-serif; width: 80%; margin: 0 auto;" >Посмотрите на поселок с высоты птичьего полета</h5> <hr id="golden_hr" style="margin-bottom: 30px; 	">
							<iframe id="video_youtube" src="https://www.youtube.com/embed/tKuvtFMLj64" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</section>

						<section class="wrapper container" id="wrapper_land_plots" style="text-align: center;"> 
							<h5 style="font-family: 'Montserrat', sans-serif; width: 80%; margin: 0 auto;" >Посмотрите на поселок с высоты птичьего полета</h5> <hr id="golden_hr" style="margin-bottom: 15px;">
							<div class="row" id="row_plot">
								<div class="col-4 col-12-narrower wow fadeInLeft" id="plot_1">
									<table class="table_middle">
										<tr class="tr_middle">
											<td class="td_middle">
												<div id="plot_wrapper">
													<div class="header_image">
														<div id="header_image1">

														</div>
													</div>
													<div id="content_plot">
														<div id="header_content_plot">
															<table class="table_middle">
																<tr class="tr_middle">
																	<td class="td_middle">
																		УЧАСТОК № 1 <br>
																		<font class="plot_square_header">Площадь участка - 12.26 сот. </font>
																	</td>
																</tr>
															</table>
														</div>
														<div id="content_plot_inside">
															<table class="table_middle">
																<tr class="tr_middle">
																	<td class="td_middle">
																		ПОЗВОНИТЕ НАМ, И МЫ С УДОВОЛЬСТВИЕМ ПОДСКАЖЕМ!
																	</td>
																</tr>
															</table>
														</div>
														<div id="footer_content_plot">
															<table class="table_middle">
																<tr class="tr_middle">
																	<td class="td_middle">
																		<div id="button_plot">
																			<table class="table_middle">
																				<tr class="tr_middle">
																					<td class="td_middle">
																						ПОЗВОНИТЬ
																					</td>
																				</tr>
																			</table>
																		</div>
																		<div id="button_plot_more">
																			<table class="table_middle">
																				<tr class="tr_middle">
																					<td class="td_middle">
																						подробнее
																					</td>
																				</tr>
																			</table>
																		</div>
																	</td>
																</tr>
															</table>
														</div>
													</div>
												</div>
											</td>
										</tr>
									</table>
								</div>
								<div class="col-4 col-12-narrower wow fadeIn" id="plot_2">
									<table class="table_middle">
										<tr class="tr_middle">
											<td class="td_middle">

												<div id="plot_wrapper">
													<div class="header_image">
														<div id="header_image2">

														</div>
													</div>
													<div id="content_plot">
														<div id="header_content_plot">
															<table class="table_middle">
																<tr class="tr_middle">
																	<td class="td_middle">
																		УЧАСТОК № 23 <br>
																		<font class="plot_square_header">Площадь участка - 12 сот. </font>
																	</td>
																</tr>
															</table>
														</div>
														<div id="content_plot_inside">
															<table class="table_middle">
																<tr class="tr_middle">
																	<td class="td_middle">
																		ПОЗВОНИТЕ НАМ, И МЫ С УДОВОЛЬСТВИЕМ ПОДСКАЖЕМ!
																	</td>
																</tr>
															</table>
														</div>
														<div id="footer_content_plot">
															<table class="table_middle">
																<tr class="tr_middle">
																	<td class="td_middle">
																		<div id="button_plot">
																			<table class="table_middle">
																				<tr class="tr_middle">
																					<td class="td_middle">
																						ПОЗВОНИТЬ
																					</td>
																				</tr>
																			</table>
																		</div>
																		<div id="button_plot_more">
																			<table class="table_middle">
																				<tr class="tr_middle">
																					<td class="td_middle">
																						подробнее
																					</td>
																				</tr>
																			</table>
																		</div>
																	</td>
																</tr>
															</table>
														</div>
													</div>
												</div>
											</td>
										</tr>
									</table>
								</div>
								<div class="col-4 col-12-narrower wow fadeInRight" id="plot_3">
									<table class="table_middle">
										<tr class="tr_middle">
											<td class="td_middle">

												<div id="plot_wrapper">
													<div class="header_image">
														<div id="header_image3">
															
														</div>
													</div>
													<div id="content_plot">
														<div id="header_content_plot">
															<table class="table_middle">
																<tr class="tr_middle">
																	<td class="td_middle">
																		УЧАСТОК № 23 <br>
																		<font class="plot_square_header">Площадь участка - 12 сот. </font>
																	</td>
																</tr>
															</table>
														</div>
														<div id="content_plot_inside">
															<table class="table_middle">
																<tr class="tr_middle">
																	<td class="td_middle">
																		ПОЗВОНИТЕ НАМ, И МЫ С УДОВОЛЬСТВИЕМ ПОДСКАЖЕМ!
																	</td>
																</tr>
															</table>
														</div>
														<div id="footer_content_plot">
															<table class="table_middle">
																<tr class="tr_middle">
																	<td class="td_middle">
																		<div id="button_plot">
																			<table class="table_middle">
																				<tr class="tr_middle">
																					<td class="td_middle">
																						ПОЗВОНИТЬ
																					</td>
																				</tr>
																			</table>
																		</div>
																		<div id="button_plot_more">
																			<table class="table_middle">
																				<tr class="tr_middle">
																					<td class="td_middle">
																						подробнее
																					</td>
																				</tr>
																			</table>
																		</div>
																	</td>
																</tr>
															</table>
														</div>
													</div>
												</div>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</section>
				</article>
				<section class="wrapper container" style="background-color: none; padding: 0; text-align: center;">
					<header class="major">
						<h5 style="font-family: 'Montserrat', sans-serif; width: 80%; margin: 0 auto;">Посмортите, где мы находимся. приезжайте, будем Вам рады!</b></h5>
						<hr id="golden_hr" style="margin-bottom: 15px;">
					</header>
					<script type="text/javascript" charset="utf-8" async class="yandex_map" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A685daa02b00d0f6991f9090974ea4fa024eee6dae95613491fcdfaeb4f8d2c77&amp;width=100%25&amp;height=453&amp;lang=ru_RU&amp;scroll=true"></script>
				</section>
			<!-- CTA -->
				<section class="wrapper container" style="background-color: none; padding: 0; text-align: center;" id="scroll">
					
					<div class="scroll_attacment">
						<table class="table_middle">
							<tr class="tr_middle">
								<td class="td_middle" style="text-align: center; margin: 0 auto;" id="font_middle_td">
									<font class="scroll_text">ЗАКАЖИТЕ ЗВОНОК ИЛИ ЗВОНИТЕ ПО НОМЕРУ: +79037264444</font>
								</td>
							</tr>
						</table>
					</div>

				</section>

				<section class="wrapper container" id="input_section" name="order_call">
					<header class="major" style="text-align: center; width: 70%; margin: 0 auto; margin-top: 30px;">
						<h5 style="font-family: 'Montserrat', sans-serif; margin: 0 auto;">Закажите звонок и мы Вам обязательно перезвоним!</b></h5>
						<hr id="golden_hr" style="opacity: 0.2; margin-bottom: 10px; width: 100%;">
					</header>
					<div id="form_section">
						<form action="index.php" method="post" class="sending_form">
							<div id="form_content">
								<div id="form_space_1"></div>
								<input type="text" size="26" maxlength="26" placeholder="Имя" name="name" id="name" style="border: 0px solid #ddd; border-bottom: 1px solid #ddd; width: 80%;">
								<input type="text" size="26" maxlength="26" placeholder="Фамилия" name="name" id="name" style="border: 0px solid #ddd; border-bottom: 1px solid #ddd; width: 80%; margin-top: 20px; margin-bottom: 20px;">
								<input type="text" size="26" maxlength="26" placeholder="Телефон" name="name" id="phone_number" style="border: 0px solid #ddd; border-bottom: 1px solid #ddd; width: 80%;" >
							</div>
							<div id="form_space"></div>
							<div id="form_button">
								<input type="submit" name="send_mail_btn" value="ЗАКАЗАТЬ ЗВОНОК">
							</div>
						</form>
					</div>
				</section>
			<!-- Footer -->

				<footer id="footer">

					<ul class="icons">
						<li><a href="https://instagram.com/new_iberia.ru?igshid=x1h78ea86d19" class="icon brands circle fa-vk"><span class="label">VKontakte</span></a></li>
						<li><a href="https://instagram.com/new_iberia.ru?igshid=x1h78ea86d19" class="icon brands circle fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://instagram.com/new_iberia.ru?igshid=x1h78ea86d19" class="icon brands circle fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="https://github.com/crazzylama0" class="icon brands fa-github"><span class="label">Github</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; 2020 Новая Иберия <br> All rights reserved</li><li>Design and created: <a href="https://github.com/crazzylama0">crazzylama0</a></li>
					</ul>

				</footer>

		</div>

		<!-- Scripts -->
		<script src="assets/js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
		<script>
			$('.owl-carousel').owlCarousel({
			    loop:true,
			    autoWidth:true,
			    items:1,
			    dots:false,
			    autoplay:true,
			    autoplayTimeout:10000,
			})
		</script>
		<script src="assets/js/custom_alert.js"></script>
		<script src="assets/js/mask.js"></script>
		<script>
		 $(document).ready(function() {
		    $("#phone_number").mask("+7 (999) 999-9999");
		  });
		</script>    
	</body>
</html>