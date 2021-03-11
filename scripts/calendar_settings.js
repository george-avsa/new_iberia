// параметры исчезновения календаря
$(document).mouseup(function (e){ // событие клика по веб-документу
	var div = $(".datepicker-here"); // тут указываем ID элемента
		if (!div.is(e.target) // если клик был не по нашему блоку
	    && div.has(e.target).length === 0) { // и не по его дочерним элементам
		$(div).fadeOut(); // скрываем его
	}
});

// параметры появления календаря
$('.showcase_calendar_pic').click(function(){
	$('.datepicker-here').fadeIn();
	kek();
});

// function kek() {
// 	var kepka = $('.-selected-').attr("data-date");
// 	if ($('.datepicker--cell').attr("data-date")==7){
// 		alert("ахуеть");
// 	}
// } 

function searchDate(date, month, year) {
	$("[data-date="+date+"][data-month="+month+"][data-year="+year+"]").addClass('newclass');
}

function checkDiscount() {
	$('.newclass').click(function(){
		var disc_day = parseInt($(this).attr('data-date'));
		var disc_month = parseInt($(this).attr('data-month'))+1;
		var disc_year = parseInt($(this).attr('data-year'));
		// alert(disc_day +"; "+ disc_month +"; "+ disc_year);
		$.ajax({
			url: '../handlers/date_checker.php',
			method: 'post',
			data: {
				day: disc_day,
				month: disc_month,
				year: disc_year,
			},
			success: function(data){
				var data = JSON.parse(data);
				var discount_txt = '<h1 class="discount_day_name" id="discount_day_name">'+data.name+'</h1><h1 class="discount_size">-<span id="discount_size">'+data.size+'</span>%</h1><h2 class="discount_day_name" id="discount_description">'+data.condition_disc+'</h2>';
			}
		});
	});

}


function kek() {
	$.ajax({
		url: '../handlers/discount_checker.php',
		method: 'post',
		data: $(this).serialize(),
		success: function(data){
			var answer = JSON.parse(data);
			for (var i = 0; i<answer.length; i++){
				var date_start = new Date(answer[i].start);
				var date_finish = new Date(answer[i].finish);
				var year = date_start.getFullYear();
				var month = date_finish.getMonth();
				var day_start = date_start.getDate();
				var day_finish = date_finish.getDate();
				for (var j = day_start; j<=day_finish; j++) {
					searchDate(j, month, year);
				}
			}
			checkDiscount();
		}
	});
}
