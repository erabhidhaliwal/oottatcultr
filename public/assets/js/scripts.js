
// jQuery to fix the searchbar on scroll
$(window).scroll(function() {
	if ($(window).scrollTop() > $("header").height() +100) {
		$("header").addClass("fixed-bg");
	} else {
		$("header").removeClass("fixed-bg");
	}
	//fade intro
	var s = $(window).scrollTop();
	opacityVal = 1.6 - (s / $('header').height());
	$('.backg h3').css('opacity', opacityVal);
});