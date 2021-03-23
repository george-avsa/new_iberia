function alertBottomLine() {
	$( ".alert_bottom_line" ).animate({
	      width: "0%", 
	}, 10000, "linear", function(){
		$(".alert_for_form").slideUp();
	});
}

function callAlert(error, msg) {
	if (error == 1) {
		$(".alert_for_form").css("background", "#f13a13");
		$(".alert_bottom_line").css("background", "#C5310F");
	} else {
		$(".alert_for_form").css("background", "#00A550");
		$(".alert_bottom_line").css("background", "#009548");
	}
	$(".alert_for_form").slideDown();
	$(".alert_for_form").css("display", "flex");
	$(".alert_form_text").html(msg);
	$(".alert_bottom_line").css("width", "90%");
	alertBottomLine();
}


function selectInput(name) {
	$("[name="+name+"]").css("border", "2px solid red");
}

$('form').click(function(){
	$('input').css("border", "none");
});

$(document).ready(function(){
	$('form').submit(function(event){
		event.preventDefault();
		$.ajax({
			url: '../handlers/send_sms.php',
			type: 'post',
			dataType: 'html',
			data: $(this).serialize(),
			success: function(html) {
				if (html == "name_empty") {
					callAlert(1, 'Вы не ввели имя');
					selectInput('name');
				} else if (html == "phone_empty") {
					callAlert(1, 'Вы не ввели номер телефона');
					selectInput('telephone');
				} else if (html == "mail_empty") {
					callAlert(1, 'Вы не ввели почту');
					selectInput('email');
				} else if (html == "big_comment") {
					callAlert(1, 'Комментарий превышает максимальное колчиство слов');
					selectInput('comment');
				} else if (JSON.parse(html).status != "OK") {
					callAlert(1, 'Заказать звонок невозможно, попробуйте позвонить нам!');
				} else {
					callAlert(0, 'Заявка отправлена');
				}
				$('.footer_placeholder').val('');
				$('.modal_contact-us_placeholder').val('');
				$("textarea").val('');
			}
		});
	});
});