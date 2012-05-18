$(document).ready(function() {
	
	init();
	
	$('#contact-form').submit(function(e){
		e.preventDefault();
		var errors = false;

		if (!errors) {
			$('#id_contactus').fadeOut();
			$('#loading').fadeIn();

			var name = $('#name').val();
			var email = $('#email').val();
			var type = $('#type').val();
			var comment = $('#comment').val();
			
			var postString = 'name='+name+'&email='+email+'&type='+type+'&comment='+comment;
			
			$.ajax({
				type: "POST",
				url: "post/contact-us.php",
				data: postString,
				dataType: "JSON",
				success: function(data) {
					$('#id_contactus').text('');
					$('#loading').hide(3000);
					$('#id_contactus').append('<center><div id="form-message"><h3>We have received your information and we will contact you shortly.</h3></div></center>');
					$('#id_contactus').fadeIn(3000);	
				}
			});
		} 
	});

	$('#mailing-form').submit(function(e) {
		e.preventDefault();
		var errors = false;

		if (!errors) {
			$('#id_promotions').fadeOut();
			$('#loading').fadeIn();

			var email = $('#mailing_email').val();
			var action = 'subscribe';

			var postString = 'email='+email+'&action='+action;

			$.ajax({
				type: "POST",
				url: "post/mailing-list.php",
				data: postString,
				dataType: "JSON",
				success: function(data) {
					$('#id_promotions').text('');
					$('#loading').hide(3000);
					$('#id_promotions').append('<center><div id="form-message"><h3>Email Subscribed.</h3></div></center>');
					$('#id_promotions').fadeIn(3000);	
				}
			});
		}
	});
	
	/*
	 * Initialization
	 */
	function init() {
		
		bindMenuClick();
		$('a.lightbox').lightBox(); // Select all links with lightbox class
		
	}
	
	/*
	 * Bind Menu Clicks 
	 */
	function bindMenuClick() {
		
		$('#home').bind('click', function() { showContent($(this));});
		$('#products').bind('click', function() { showContent($(this));});
		$('#promotions').bind('click', function() { showContent($(this));});
		$('#aboutus').bind('click', function() { showContent($(this));});
		$('#contactus').bind('click', function() { showContent($(this));});
		
	}
	
	/*
	 * Display correct content base on the click
	 */
	function showContent(item) {
		
		var id = item.attr('id');
		$('#id_home').hide();
		$('#id_products').hide();
		$('#id_promotions').hide();
		$('#id_aboutus').hide();
		$('#id_contactus').hide();
		$('#id_'+id).fadeIn(500);
		
	}

	/*
	 * Validation of the form
	 */
	function validateForm(form) {
		
		var error = false;
		var errorMsg = '';
		
		$('#form-message').remove();
		
		$('#'+form+' .required').each(function () {
			if ($(this).val() == '') {
				error = true;
				errorMsg += '<li>' + $(this).attr('id') + ' is blank.</li>';
			}
		});

		if (error) {
			$('#loading').hide(3000);
			$('#'+form).parent().prepend('<div id="form-message"><p>Please complete the following:</p><ul>' + errorMsg + '</ul></div>');
			$('#'+form).parent().fadeIn(3000);
		}

		return error;
	}
});