	$.ajax({
		url: '../handlers/news_filter.php',
		method: 'post',
		success: function(data){
			var news = JSON.parse(data);
			var kekable = "";
			news.sort((a,b) => a.date > b.date);
			var count = news.length-1;
			var mincount = news.length-4;
			for (var i = count; i > mincount; i--) {
				if (i == count) {
					var kekable = kekable + "<div class='news_item news_item-mobile'><div class='news_item-image' style='background-image: url(../"+news[i].preview_image+");'></div><h1 class='news_item-date'>"+news[i].date+"</h1><h1 class='news_item-title'>"+news[i].title+"</h1><h2 class='news_item-description'>"+news[i].small_description+"</h2><h3 class='news_item-more' id='news_main"+news[i].id+"' onclick='newsAlert(this.id)'>читать далее ></h3></div>";
				} else {
					var kekable = kekable + "<div class='news_item'><div class='news_item-image' style='background-image: url(../"+news[i].preview_image+");'></div><h1 class='news_item-date'>"+news[i].date+"</h1><h1 class='news_item-title'>"+news[i].title+"</h1><h2 class='news_item-description'>"+news[i].small_description+"</h2><h3 class='news_item-more' id='news_main"+news[i].id+"' onclick='newsAlert(this.id)'>читать далее ></h3></div>";
				}
			}
			$('.news_line').html(kekable);
		}
	});


