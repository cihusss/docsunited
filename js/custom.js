$(document).ready(function() {

	$('.top-arrow').click(function(event) {
		$(window).scrollTo('html', 1000);
	});

	$("#top-trigger").waypoint({
		handler: function(event, direction) {
		
			if (direction === "down") {
				$('.top-arrow').fadeIn();
			}
			if (direction === "up") {
				$('.top-arrow').fadeOut();
			}
		},
	});

	$('.fa-bars').click(function() {
		$('.mobile-links').toggleClass('open');
		$(this).toggleClass('fg-orange');
	});

});
