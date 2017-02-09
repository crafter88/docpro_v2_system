$(window).load(function(){
	$('body').removeAttr('style');
	if(parseFloat(window.screen.availHeight) <= 728){
		$('body').css('zoom', '90%');
	}else if(parseFloat(window.screen.availWidth) <= 1200){
		$('body').css('zoom', '70%');
	}else if(parseFloat(window.screen.availWidth) <= 1280){
		$('body').css('zoom', '80%');
	}else if(parseFloat(window.screen.availWidth) <= 1360){
		$('body').css('zoom', '90%');
	}else if(parseFloat(window.screen.availWidth) < 1366){
		$('body').css('zoom', '90%');
	}
});
