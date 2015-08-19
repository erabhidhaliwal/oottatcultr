
// jQuery to fix the searchbar on scroll


if($(window).width() > 480)
{
	$(window).scroll(function() {
		if ($(window).scrollTop() > $("header").position().top) {
			$("header").addClass("fixed-bg");
		} else {
			$("header").removeClass("fixed-bg");
		}
		//fade intro
		var s = $(window).scrollTop();
		opacityVal = 2 - (s / $('header').height());
		$('.cover-title').css('opacity', opacityVal);
	});
}
else{
	$("header").addClass("fixed-bg-small");
}
//AJAX FORM
$('.form').find('input, textarea').on('keyup blur focus', function (e) {

	var $this = $(this),
		label = $this.prev('label');

	if (e.type === 'keyup') {
		if ($this.val() === '') {
			label.removeClass('active highlight');
		} else {
			label.addClass('active highlight');
		}
	} else if (e.type === 'blur') {
		if( $this.val() === '' ) {
			label.removeClass('active highlight');
		} else {
			label.removeClass('highlight');
		}
	} else if (e.type === 'focus') {

		if( $this.val() === '' ) {
			label.removeClass('highlight');
		}
		else if( $this.val() !== '' ) {
			label.addClass('highlight');
		}
	}

});

$('.tab a').on('click', function (e) {

	e.preventDefault();

	$(this).parent().addClass('active');
	$(this).parent().siblings().removeClass('active');

	target = $(this).attr('href');

	$('.tab-content > div').not(target).hide();

	$(target).fadeIn(600);

});