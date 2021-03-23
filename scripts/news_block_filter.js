	$.ajax({
		url: '../handlers/news_filter.php',
		method: 'post',
		success: function(data){
			var news = JSON.parse(data);
			var kekable = "";
			news.sort((a,b) => a.date > b.date);
			var count = news.length-1; 
			var counttt = news.length-4;
			var coyntt = news.length-2;
			for (var i = count; i > counttt; i--) {
				var description = news[i].date +'<br>'+ news[i].small_description;
				if (i == coyntt) {
					kekable = kekable + '<div class="news_block-item second-news_block-item"><div class="news_block-item_picture" style="background-image: url('+news[i].preview_image+')"></div><h1 class="news_block-item_title">'+news[i].title+'</h1><h2 class="news_block-item_description">'+description+'</h2><div class="news_block-item_btn-more" id="news_main'+news[i].id+'" onclick="newsAlert(this.id)">подробнее</div></div>';
				} else {
					kekable = kekable + '<div class="news_block-item"><div class="news_block-item_picture" style="background-image: url('+news[i].preview_image+')"></div><h1 class="news_block-item_title">'+news[i].title+'</h1><h2 class="news_block-item_description">'+description+'</h2><div class="news_block-item_btn-more" id="news_main'+news[i].id+'" onclick="newsAlert(this.id)">подробнее</div></div>'; 
				}
			}
			$('.news_block-items').html(kekable);
		}
	});
	$('.news-block_more').click(function(){
		moreNews();
		$(this).hide();
	});
	function moreNews() {
		$.ajax({
			url: '../handlers/news_filter.php',
			method: 'post',
			success: function(data){
				var news = JSON.parse(data);
				var kekable = "";
				news.sort((a,b) => a.date > b.date);
				var count = 3; 
				for (var i = 0; i < news.length; i++) {
					var description = news[i].date +'<br>'+ news[i].small_description;
					var result = count - 3;
					if (result == 0) {
						kekable = '<div class="news_block-item second-news_block-item"><div class="news_block-item_picture" style="background-image: url('+news[i].preview_image+')"></div><h1 class="news_block-item_title">'+news[i].title+'</h1><h2 class="news_block-item_description">'+description+'</h2><div class="news_block-item_btn-more" id="news_main'+news[i].id+'" onclick="newsAlert(this.id)">подробнее</div></div>' + kekable;
						count = 1;
					} else {
						kekable = '<div class="news_block-item"><div class="news_block-item_picture" style="background-image: url('+news[i].preview_image+')"></div><h1 class="news_block-item_title">'+news[i].title+'</h1><h2 class="news_block-item_description">'+description+'</h2><div class="news_block-item_btn-more" id="news_main'+news[i].id+'" onclick="newsAlert(this.id)">подробнее</div></div>' + kekable;
						count++;
					}
				}
				$('.news_block-items').html(kekable);
			}
		});
	}

	

	