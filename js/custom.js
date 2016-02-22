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

	// navbar 

	$('.fa-bars').click(function() {
		console.log('click');
		$('.mobile-links').toggleClass('open');
		$(this).toggleClass('fg-orange');
	});

	(function highlightNav() {
		// console.log(window.location.pathname);
		if(window.location.pathname == '/' || window.location.pathname == '/du/') {
			$('.home').addClass('bg-grey-md');
			// console.log('addclass');
		}
		var pageName = window.location.pathname.split('/');
		if(window.location.host == 'docsunited.dev:8888') {
			var pageNameClean = pageName[1].slice(0, pageName.length -6);
			// console.log(pageName[1]);
		}
		else {
			var pageNameClean = pageName[2].slice(0, pageName.length -7);
			// console.log(pageName[2]);
		}
		$('.link').each(function(){
			var grabName = $(this).attr('data-link-name');
			if(grabName == pageNameClean || '') {
				$(this).addClass('bg-grey-md');
				// console.log('booooyaa');
			}
			else { }
		});
	})();

	// form processing

	function processForm(e) {
		
		e.preventDefault();

		var url;
		var inputArr = [];

		if(window.location.pathname == '/facilities.php') {
			url = '/sendMailFacilities.php'
		}
		if(window.location.pathname == '/providers.php') {
			url = '/sendMailProviders.php'
		}
		if(window.location.pathname == '/contact.php') {
			url = '/sendMailcontact.php'
		}

		$('input[required]').each(function() {

		    if ($(this).val() == '') {

		        alert('Required field should not be blank.');
		        $(this).focus();
		        inputArr.push('empty');

		        e.preventDefault();
		        return false;
		    }
		    else {
		    	inputArr.push('filled');
		    }
		});

		if($.inArray('empty', inputArr) !== -1) {
	    	console.log('one or more empty');
	    }
	    else {
	    	console.log(inputArr);
		    $.ajax({
		        url: url,
		        dataType: 'text',
		        type: 'post',
		        contentType: 'application/x-www-form-urlencoded',
		        data: $(this).serialize(),
		        success: function( data, textStatus, jQxhr ) {
		            showThankYou();
		        },
		        error: function( jqXhr, textStatus, errorThrown ) {
		            console.log( errorThrown );
		        }
		    });
	    }
	}

	function showThankYou() {
		$('#form').hide();
		$('.thanks').show();
	}

	$('#form').submit(processForm);

});
