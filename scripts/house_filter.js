function moreHouses() {
	$.ajax({
		url: 'handlers/houses_filter.php',
		method: 'post',
		data: $(this).serialize(),
		success: function(data){
			var answer = JSON.parse(data);
			var kekable = "";
			var count = 1;
			for (var i = 0; i < answer.length; i++) {
				var kekmeksmek = '".modal_house"';
				if (count % 3 == 2 &&
						count != 1) {
					var kekable = "<div class='showcase-item'><div class='showcase-item__image' style='background-image: url("+answer[i].preview_image+");'><div class='showcase-item__discount'>15%</div></div><h1 class='showcase-item__title'>Площадь дома - "+ answer[i].square_house +" кв. м <br>Цена - "+answer[i].price+" ₽</h1><h2 class='showcase-item__description'>"+ answer[i].small_description +"</h2><div class='showcase-item__button' id='button_showcase"+answer[i].id+"' onclick='popupHouse("+kekmeksmek+", this.id)'>Подробнее</div></div>" + kekable;
				} else {
					var kekable = "<div class='showcase-item notthree'><div class='showcase-item__image' style='background-image: url("+answer[i].preview_image+");'><div class='showcase-item__discount'>15%</div></div><h1 class='showcase-item__title'>Площадь дома - "+ answer[i].square_house +" кв. м <br>Цена - "+answer[i].price+" ₽</h1><h2 class='showcase-item__description'>"+ answer[i].small_description +"</h2><div class='showcase-item__button' id='button_showcase"+answer[i].id+"' onclick='popupHouse("+kekmeksmek+", this.id)'>Подробнее</div></div>" + kekable;
				}
			count++;
			}
			$('.showcase-body').html(kekable);
		}
	});
	$('.showcase-more__text').hide();
}

$(document).ready(function() {
		$.ajax({
			url: 'handlers/houses_filter.php',
			method: 'post',
			data: $(this).serialize(),
			success: function(data){
				var answer = JSON.parse(data);
				var kekable = "";
				var count=1;
				for (var i = 0; i < 3  ; i++) {
					var kekmeksmek = '".modal_house"';
					if (count % 3 == 0 &&
						count % 2 != 0) {
							var kekable = "<div class='showcase-item'><div class='showcase-item__image' style='background-image: url("+answer[i].preview_image+");'><div class='showcase-item__discount'>15%</div></div><h1 class='showcase-item__title'>Площадь дома - "+ answer[i].square_house +" кв. м <br>Цена - "+answer[i].price+" ₽</h1><h2 class='showcase-item__description'>"+ answer[i].small_description +"</h2><div class='showcase-item__button' id='button_showcase"+answer[i].id+"' onclick='popupHouse("+kekmeksmek+", this.id)'>Подробнее</div></div>" + kekable;
						} else {
							var kekable = "<div class='showcase-item notthree'><div class='showcase-item__image' style='background-image: url("+answer[i].preview_image+");'><div class='showcase-item__discount'>15%</div></div><h1 class='showcase-item__title'>Площадь дома - "+ answer[i].square_house +" кв. м <br>Цена - "+answer[i].price+" ₽</h1><h2 class='showcase-item__description'>"+ answer[i].small_description +"</h2><div class='showcase-item__button' id='button_showcase"+answer[i].id+"' onclick='popupHouse("+kekmeksmek+", this.id)'>Подробнее</div></div>" + kekable;
						}
					count++;
				}
				$('.showcase-body').html(kekable);
			}
		});
	});