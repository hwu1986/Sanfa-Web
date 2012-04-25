$(document).ready(function() {
	
	$('#contact-form').submit(function(e){
		e.preventDefault();
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
				if (data.status == 'true') {
					$('#id_contactus').text('');
					$('#loading').hide(3000);
					$('#id_contactus').append('<center><h3>We have received your information and will contact you shortly.</h3></center>');
					$('#id_contactus').fadeIn(3000);
				} else {
					$('#loading').hide(3000);
					$('#id_contactus').prepend('<center><h3>We have encountered some error, please try again later.</h3></center>');
					$('#id_contactus').fadeIn();
				}
			}
		});
	});
	
	$('#home').bind('click', function() {
		showContent($(this));
	});
	
	$('#services').bind('click', function() {
		showContent($(this));
	});
	
	$('#sales').bind('click', function() {
		showContent($(this));
	});
	
	$('#aboutus').bind('click', function() {
		showContent($(this));
	});
	
	$('#contactus').bind('click', function() {
		showContent($(this));
	});
	
	$('a.lightbox').lightBox(); // Select all links with lightbox class
	
	function showContent(item) {
		
		var id = item.attr('id');
		$('#id_home').hide();
		$('#id_services').hide();
		$('#id_sales').hide();
		$('#id_aboutus').hide();
		$('#id_contactus').hide();
		$('#id_'+id).fadeIn(500);
	}
});