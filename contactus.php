<!-- This is where the Header starts -->

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>San Fa Construction Supply | Contact Us</title>
	<!-- Javascripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.lightbox-0.5.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
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
		});
	</script>

	<!-- Stylesheets -->
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css">

	<!-- Metadata -->
	<meta name="description" content="Fill the contact us form to inquire or comment about our current prices." />
	<meta name="keywords" content="Belize, Construction Supply Belize, Construction Supply Corozal, Home Improvement Belize, Home Building Belize, Corozal Town, Belize Maya Cement, Belize Steels, Belize Construction, Corozal, Corozal Belize C.A" />
	<meta name="author" content="SanFa Construction Supply" />
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
</head>
<body class="center">
	<?php include_once("js/analyticstracking.php") ?>
	<!-- Logo Placeholder -->
	<div class="header">
		<img id="logo" class="center" src="images/sanfa_logo.png" height="200px" width="400px"/>
	</div>
	
	<?php include "template/nav.php"; ?>

	<div class="center content">
		<!-- Center Content Placeholder -->
		<div class="border main-content">
			<!-- Contact Us -->
			<div id="id_contactus" class="text">
				<p><h2>Contact Us >></h2></p>
				<div class="contact-form">
					<form id="contact-form" action="" method="POST">
					
						<table id="form-table" class="center">
							<tr>
								<td>Name/Company:</td>
								<td><input type="text" id="name" class=
									"required" style="width:200px;"></td>
							</tr>
							<tr>
								<td>Email:</td>
								<td><input type="text" id="email" class=
									"required" style="width:200px"></td>
							</tr>
							<tr>
								<td>Inquiry Type:</td>
								<td><select id="type">
										<option value="Contruction Materials">Contruction Materials</option>
										<option value="Curtain Doors">Curtain Doors</option>
										<option value="Construction Consultation">Curtain Doors</option>
										<option value="Construction Plan">Curtain Doors</option>
										<option value="Others">Others</option>
									</select>
								</td>
							</tr>
							<tr>
								<td style="vertical-align: text-top;">Comments:</td>
								<td><textarea id="comment" class="required"></textarea></td>
							</tr>
							<tr>
								<td></td>
								<td>
									<div class="action">
										<input type="submit" value="Submit Form">
										<input type="reset" value="Clear Form">
									</div>
								</td>					
							</tr>
						</table>
						
					</form>
				</div>
			</div>
			
			<!-- Loading -->
			<div id="loading" class="hidden">
				<img class="center" id="img-loading" src="images/loading.gif" />
			</div>
		</div>
	</div>
	
<?php include "template/footer.php"; ?>

</body>
</html>
