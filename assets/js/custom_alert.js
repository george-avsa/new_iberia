function alert_submit(content,square,price,afterFunction){
	$('<div class="alertm_overlay" onclick="alert_close('+afterFunction+'); return false"></div>').appendTo('body');
	$('<div class="alert_wrapper" onclick="alert_close('+afterFunction+'); return false"><table class="alert_table"><tr class="alert_tr"><td class="alert_td"><div class="alert_content"><div class="header_alert"><table class="alert_bottom"><tr class="alert_bottom"><td class="alert_bottom"><font class="font_header_alert">Участок № '+content+'</font></td></tr></table></div><div class="alert_footer"><table class="alert_bottom"><tr class="alert_bottom"><td class="alert_bottom"><font style="alert_footer_font">Площадь: '+square+' сот.<br> Цена: '+price+' руб.</font></td></tr></table></div></div></td></tr></table></div>').appendTo('body');
	$(".alertm_overlay, .alert_wrapper").fadeIn("slow");
}
function alert_close(afterFunctionClouse){

	$(".alertm_overlay, .alert_wrapper").fadeOut("slow");
	afterFunctionClouse;
}