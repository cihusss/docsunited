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
		console.log('click');
		$('.mobile-links').toggleClass('open');
		$(this).toggleClass('fg-orange');
	});

	(function highlightNav() {
		var pageName = window.location.pathname;
		var pageNameClean = pageName.slice(1, pageName.length -4);
		$('.link').each(function(){
			var grabName = $(this).attr('data-link-name');
			if(grabName == pageNameClean) {
				$(this).addClass('bg-grey-md');
			}
			else { }
		});
	})();

});
