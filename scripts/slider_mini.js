	function SuperKekMekShmek(links) {
		$('#slider-mini_small-item_top').css({'height':'90%','position':'relative', 'width':'25%'});
		$('#slider-mini_small-arrow-body_top').css('display', 'block');
		// вставить новую фотку
		$('#slider-mini_small-item_top').css('background-image', links);
		$('#slider-mini_small-item_top').animate({opacity:'1'});
	}

	var countSliderMini = 1;
	function sliderMiniClick(id, idHover, photo_array) {
		$(id).click(function(){
			$('.slider_mini').css({'position':'relative'});
			$('#slider-mini_small-arrow-body_top').css('display', 'none');
			$(this).css({'right':'0','position':'absolute', 'left':'75%'});
			$(this).animate({
				left: "0%",
				width: "70%",
				height: "100%"
			});
			$(this).animate({opacity: "0"});
			if ([countSliderMini+1]==photo_array.length) {
				var linkSliderMiniBig = 'url('+ photo_array[countSliderMini].link + ')';
				var linkSliderMiniSmall = 'url('+ photo_array[0].link + ')';
				countSliderMini = -1;
			} else {
			var linkSliderMiniBig = 'url('+ photo_array[countSliderMini].link + ')';
			var linkSliderMiniSmall = 'url('+ photo_array[countSliderMini+1].link + ')';
			}
			countSliderMini++;
			// while (countSliderMini<=photo_array.length){
			// 	var linkSliderMiniBig = 'url('+ phtos[countSliderMini].link + ')';
			// 	var linkSliderMiniSmall = 'url('+ phtos[countSliderMini+1].link + ')';
			// 	countSliderMini++;
			// }
			// присвоить тут большему сладйеру фотку нового
			setTimeout(() => $('#big_slide1').css('background-image', linkSliderMiniBig), 200);
			setTimeout(SuperKekMekShmek, 1000, linkSliderMiniSmall);
			
		});	
	}

	$.ajax({
		url: 'handlers/photo_slidermini_filter.php',
		method: 'post',
		success: function(data){
			var phtos = JSON.parse(data);
			var linkBig = 'url('+ phtos[0].link + ')';
			var linkSmall = 'url('+ phtos[1].link + ')';
			$('#big_slide1').css('background-image', linkBig);
			$('#slider-mini_small-item_top').css('background-image', linkSmall);
				sliderMiniClick('#slider-mini_small-item_top', '#slider-mini_small-item_back_top', phtos);
			
		}
	});
