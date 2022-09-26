var accordeon = {
	init:function(){
		var $content = $(".content");
		var $bar = $(".bar");
		
		if(!$content.length || !$bar.length) return;
		
		$content.hide();
		$bar.click(function(){
			$bar.removeClass("current");
			$content.not(":hidden").slideUp('slow');
			$(this).next()
			.not(":visible")
			.slideDown('slow')
			.prev()
			.addClass("current");
		});	
	}
}

	$(document).ready(accordeon.init);