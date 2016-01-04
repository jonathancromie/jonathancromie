$(document).ready(function() {
	$('a[href="#one"]').click(function() {
	    var offset = 20; //Offset of 20px

	    $('html, body').animate({
	        scrollTop: $("#one").offset().top + offset
	    }, 2000);
	});
});