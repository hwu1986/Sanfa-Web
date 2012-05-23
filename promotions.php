<!-- This is where the Header starts -->

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>San Fa Construction Supply</title>
	<!-- Javascripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.lightbox-0.5.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
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
		});
	</script>

	<!-- Stylesheets -->
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css">

	<!-- Metadata -->
	<meta name="description" content="Sanfa Construction Supply is located in Corozal, Belize. We specialize in construction materials such as cements, steels, hardwares, tools, and many more." />
	<meta name="keywords" content="Belize, Construction Supply Belize, Construction Supply Corozal, Home Improvement Belize, Home Building Belize, Corozal Town, Belize Maya Cement, Belize Steels, Belize Construction, Corozal, Corozal Belize C.A" />
	<meta name="author" content="HsienTsung Wu" />
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
			<!-- Products -->
			<div id="id_promotions" class="text">
				<p><h2>Promotions >></h2></p>
				<p>No promotion at this time. Please check back later. </p>
				<p><h3>Mailing List Subscription</h3></p>
				<div class="mailing-form">
					<p>Join our promotion mailing list to get the latest construction supply deals!</p>
					<form id="mailing-form" action="" method="POST">
						<input type="text" id="mailing_email" class="required" style="width:300px" autocomplete="off">
						<div class="action">
							<input type="submit" value="Submit Form">
							<input type="reset" value="Clear Form">
						</div>
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
