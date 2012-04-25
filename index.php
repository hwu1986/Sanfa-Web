<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>San Fa Construction Supply</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
	<script src="js/home.js" type="text/javascript"></script>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.lightbox-0.5.js" type="text/javascript"></script>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="clear"></div>
	
	<!-- Logo Placeholder -->
	<div class="header">
		<img id="logo" class="center" src="images/sanfa_logo.jpg" height="200px" width="400px"/>
	</div>
	
	<!-- Navigation Placeholder -->
	<div class="nav">
		<ul>
			<li><a id="home" href="#">Home</a></li>
			<li><a id="services" href="#">Services</a></li>
			<li><a id="sales" href="#">Sales</a></li>
			<li><a id="aboutus" href="#">About Us</a></li>
			<li><a id="contactus" href="#">Contact Us</a></li>
		</ul>
	</div>
	
	<div class="clear"></div>
	
	<div class="center content">
		<!-- Center Content Placeholder -->
		<div class="border main-content">
			<div id="id_home" class="text">
				<p><h2>Home >> </h2></p>
				
			</div>
			<div id="id_services" class="text hidden">
				<p><h2>Services >></h2></p>
			</div>
			<div id="id_sales" class="text hidden">
				<p><h2>Sales >></h2></p>
			</div>
			<div id="id_aboutus" class="text hidden">
				<p><h2>About Us >></h2></p>
				<p>Sanfa Construction Supply was established in 2002. The main focus of this company is Maya Cement, Steels, and Roller Shutter Doors creation. We not only vend Cement and Steels but also hardware materials, such as: Nails, tying wire, doors, lumbers, and many other construction supplies.
The founder of this company is Mr. Hsi-Fa Wu. The company’s current location is in Corozal, Belize. Central America. Throughout these years, we have been advancing not only our products but also our company services. </p>
			</div>
			
			<!-- Contact Us -->
			<div id="id_contactus" class="text hidden">
				<p><h2>Contact Us >></h2></p>
				<div class="contact-form">
					<form id="contact-form" action="" method="POST">
					
						<table id="form-table" class="center">
							<tr>
								<td>Name/Company:</td>
								<td><input type="text" id="name" style="width:200px;"></td>
							</tr>
							<tr>
								<td>Email:</td>
								<td><input type="text" id="email" style="width:200px"></td>
							</tr>
							<tr>
								<td>Inquiry Type:</td>
								<td><select id="type">
										<option value="Contruction Materials">Contruction Materials</option>
										<option value="Curtain Doors">Curtain Doors</option>
										<option value="Others">Others</option>
									</select>
								</td>
							</tr>
							<tr>
								<td style="vertical-align: text-top;">Comments:</td>
								<td><textarea id="comment"></textarea></td>
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
	
	<div class="clear"></div>
	
	<div class="footer center">

		Copyright © 2012 San-Fa Inc. All rights reserved.<br>
		<a href="http://www.exdreamstudio.com">eXDream Inc</a>.
	</div>
</body>
</html>
