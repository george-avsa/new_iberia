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

	function sliderRight(feed) {
	    var posright = $(feed).position();
		var positionr = -(posright.left);
		if (positionr != 0){
		    $(feed).animate({
		      left: "+=100%",
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
				$('.modal_house_content-description').html(answer.description);
				var roomAmount = answer.room_amount + ' спальни';
				$('#modal_house_content-bedroom').html(roomAmount);
				$('.modal_house_planing').attr('src', answer.plan_image);
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

	$('#header-menu__button_modal').click(function(){
		$('.modal_contact-us').fadeIn();
	});
	$('#header-menu__button-mobile').click(function(){
		$('.header-hidden-menu').slideUp();
		$('.modal_contact-us').fadeIn();
	});

	$('.genplan-item__button').click(function(){
		$('.modal_contact-us').fadeIn();
	});


	function mobileAnchor(hrefModile) {
		$('.header-hidden-menu').slideUp();
    	$("html, body").animate({scrollTop: $(hrefModile).offset().top+"px"});
    	return false;
	}



	function closeAndOpenAlert() {
		$('.modal_house').fadeOut();
		$('.modal_contact-us').fadeIn();
	}


	$('.modal_news-recomended_more-text').click(function(){
		$('.modal_news_one').fadeOut();
	});



	function alertRecoms() {
			$.ajax({
			url: '../handlers/news_filter.php',
			method: 'post',
			success: function(data){
				var news = JSON.parse(data);
				var kekable = "";
				news.sort((a,b) => a.date > b.date);
				var count = news.length-1;
				var countt = news.length-2;
				var mincount = news.length-4;
				for (var i = count; i > mincount; i--) {
					if (i == count) {
						var kekable = kekable + "<div class='modal_news-recomended-item modal_news-recomended-mobile'><div class='modal_news-recomended-item_picture' style='background-image: url("+news[i].preview_image+")'></div><h1 class='modal_news-recomnded-item_title'>"+news[i].title+"</h1><h2 class='modal_news-recomnded-item_description'>"+news[i].small_description+"</h2><div class='modal_news-recomnded-item_button' id='news_modal"+news[i].id+"' onclick='closeNewsModalOpenNew(this.id)'>подробнее</div></div>";
					} else if (i==countt) {
						var kekable = kekable + "<div class='modal_news-recomended-item modal_news_second-item'><div class='modal_news-recomended-item_picture' style='background-image: url("+news[i].preview_image+")'></div><h1 class='modal_news-recomnded-item_title'>"+news[i].title+"</h1><h2 class='modal_news-recomnded-item_description'>"+news[i].small_description+"</h2><div class='modal_news-recomnded-item_button'  id='news_modal"+news[i].id+"' onclick='closeNewsModalOpenNew(this.id)'>подробнее</div></div>";
					} else {
						var kekable = kekable + "<div class='modal_news-recomended-item'><div class='modal_news-recomended-item_picture' style='background-image: url("+news[i].preview_image+")'></div><h1 class='modal_news-recomnded-item_title'>"+news[i].title+"</h1><h2 class='modal_news-recomnded-item_description'>"+news[i].small_description+"</h2><div class='modal_news-recomnded-item_button' id='news_modal"+news[i].id+"' onclick='closeNewsModalOpenNew(this.id)'>подробнее</div></div>";
					}
				}
				$('.modal_news-recomended').html(kekable);
			}
		});
		}	


	function closeNewsModalOpenNew(id) {
		$('.modal_news_one').fadeOut();
		$('.modal_news_one').fadeIn();
		id = Number.parseInt(id.replace('news_modal', ''));
		$.ajax({
				url: 'handlers/news_popup.php',
				method: 'post',
				data: {text: id},
				success: function(data){
					var answer = JSON.parse(data);
					// alert(answer.recomended[0].id);
					$('.modal_news_one-texts_body_news-title').html(answer.news_one.title);
					$('.modal_news_one-texts-date').html(answer.news_one.date);
					var content = '<div class="modal_news-content_text">' + answer.news_one.text1 +'</div><div class="modal_news-content_picture" background-image="'+ answer.news_one.image +'"></div><div class="modal_news-content_text">' + answer.news_one.text2 +'</div>';
					$('.kekmemshmek').html(content);
					alertRecoms()
					// $('.modal_house__project-description').html(answer.small_description);
					// $('.modal_house__project-name').html(answer.project_name);

					// var all_slides_modal = '';
					// for (var i = 0; i < answer.links.length; i++) {
					// 	all_slides_modal='<div class="modal_house__slider-item" style="background-image: url('+ answer.links[i].link +');"></div>' + all_slides_modal;
					// }
					// $('.modal_house__slider-line').html(all_slides_modal);
				}
			});
	}

	function newsAlert(id){
		$('.modal_news_one').fadeIn();
		id = Number.parseInt(id.replace('news_main', ''));
		$.ajax({
				url: 'handlers/news_popup.php',
				method: 'post',
				data: {text: id},
				success: function(data){
					var answer = JSON.parse(data);
					// alert(answer.recomended[0].id);
					$('.modal_news_one-texts_body_news-title').html(answer.news_one.title);
					$('.modal_news_one-texts-date').html(answer.news_one.date);
					var content = '<div class="modal_news-content_text">' + answer.news_one.text1 +'</div><div class="modal_news-content_picture" background-image="'+ answer.news_one.image +'"></div><div class="modal_news-content_text">' + answer.news_one.text2 +'</div>';
					$('.kekmemshmek').html(content);
					alertRecoms();
					// $('.modal_house__project-description').html(answer.small_description);
					// $('.modal_house__project-name').html(answer.project_name);

					// var all_slides_modal = '';
					// for (var i = 0; i < answer.links.length; i++) {
					// 	all_slides_modal='<div class="modal_house__slider-item" style="background-image: url('+ answer.links[i].link +');"></div>' + all_slides_modal;
					// }
					// $('.modal_house__slider-line').html(all_slides_modal);
				}
			});
	}