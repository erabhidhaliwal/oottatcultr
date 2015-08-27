
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



//Cutom Modal

$(function() {
	$('.close-modal').bind('click', function(event) {
		$(".modal").hide();
	});

	//$('.login-btn').bind('click', function(event) {
	//	event.preventDefault();
	//	$('#modal-content').html($("#login-form").html());
	//	$(".modal").show();
	//});
    //
	//$('.register-btn').bind('click', function(event) {
	//	event.preventDefault();
	//	$('#modal-content').html($("#register-form").html());
	//	$(".modal").show();
	//});
    //
	//$('#forget-pass-btn').bind('click', function(event) {
	//	console.log("foget haan??");
    //
	//});
    //
	//if(window.location.hash == "#login") {
	//	event.preventDefault();
	//	$('#modal-content').html($("#login-form").html());
	//	$(".modal").show();
	//}
	//if(window.location.hash == "#register") {
	//	event.preventDefault();
	//	$('#modal-content').html($("#register-form").html());
	//	$(".modal").show();
	//}
});