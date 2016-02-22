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

		if($('head').attr('data-page-name') == 'facilities') {
			url = 'sendMailFacilities.php'
		}
		if($('head').attr('data-page-name') == 'providers') {
			url = 'sendMailProviders.php'
		}
		if($('head').attr('data-page-name') == 'contact') {
			url = 'sendMailcontact.php'
		}

		$('input[required]').each(function() {

		    if ($(this).val() == '') {

		        // alert('Required field should not be blank.');
		        $('.form-disc').show();
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
	    	console.log(url);
		    $.ajax({
		        url: url,
		        // url: 'sendMailFacilities.php',
		        dataType: 'text',
		        type: 'post',
		        contentType: 'application/x-www-form-urlencoded',
		        data: $(this).serialize(),
		        cache: false,
	            headers: { "cache-control": "no-cache" },
		        success: function( data, textStatus, jQxhr ) {
		        	console.log('data sent');
		            showThankYou();
		        },
		        error: function( jqXhr, textStatus, errorThrown ) {
		            console.log('error');
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
