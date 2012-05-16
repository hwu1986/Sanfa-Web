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
<body class="center">
	
	<!-- Logo Placeholder -->
	<div class="header">
		<img id="logo" class="center" src="images/sanfa_logo.jpg" height="200px" width="400px"/>
	</div>
	
	<!-- Navigation Placeholder -->
	<div class="nav">
		<ul>
			<li><a id="home" href="#">Home</a></li>
			<li><a id="products" href="#">Products</a></li>
			<li><a id="promotions" href="#">Promotions</a></li>
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
			<div id="id_products" class="text hidden">
				<p><h2>Products >></h2></p>
				<div class="product center">			
					<table id="id_gallery">
						<tr>
							<td>Cements</td>
							<td>Steels</td>
							<td>Blocks</td>
						</tr>
						<tr>
							<td><a class="lightbox" href="images/products/pdt-cements1.jpg"><img src="images/products/pdt-cements1.jpg"/></a></td>
							<td><a class="lightbox" href="images/products/pdt-steels1.jpg"><img src="images/products/pdt-steels1.jpg"/></a></td>
							<td><a class="lightbox" href="images/products/pdt-blocks1.jpg"><img src="images/products/pdt-blocks1.jpg"/></a></td>
						</tr>
						<tr>
							<td>Nails</td>
							<td>Motor Oils</td>
							<td>Paints</td>
						</tr>
						<tr>
							<td><a class="lightbox" href="images/products/pdt-nails1.jpg"><img src="images/products/pdt-nails1.jpg"/></a></td>
							<td><a class="lightbox" href="images/products/pdt-oils1.jpg"><img src="images/products/pdt-oils1.jpg"/></a></td>
							<td><a class="lightbox" href="images/products/pdt-paints1.jpg"><img src="images/products/pdt-paints1.jpg"/></a></td>
						</tr>
						<tr>
							<td>Plumbings</td>
							<td>Lights</td>
							<td>Fences</td>
						</tr>
						<tr>
							<td><a class="lightbox" href="images/products/pdt-pvc1.jpg"><img src="images/products/pdt-pvc1.jpg"/></a></td>
							<td><a class="lightbox" href="images/products/pdt-light1.jpg"><img src="images/products/pdt-light1.jpg"/></a></td>
							<td><a class="lightbox" href="images/products/pdt-fence1.jpg"><img src="images/products/pdt-fence1.jpg"/></a></td>
						</tr>
						<tr>
							<td>Curtains</td>
							<td>Springs</td>
							<td>Knobs</td>
						</tr>
						<tr>
							<td><a class="lightbox" href="images/products/pdt-curtaindoor1.jpg"><img src="images/products/pdt-curtaindoor1.jpg"/></a></td>
							<td><a class="lightbox" href="images/products/pdt-springs1.jpg"><img src="images/products/pdt-springs1.jpg"/></a></td>
							<td><a class="lightbox" href="images/products/pdt-knobs1.jpg"><img src="images/products/pdt-knobs1.jpg"/></a></td>
						</tr>
						<tr>
							<td>Handtools</td>
							<td>Machinery</td>
							<td>Screws</td>
						</tr>
						<tr>
							<td><a class="lightbox" href="images/products/pdt-handtools1.jpg"><img src="images/products/pdt-handtools1.jpg"/></a></td>
							<td><a class="lightbox" href="images/products/pdt-machinery1.jpg"><img src="images/products/pdt-machinery1.jpg"/></a></td>
							<td><a class="lightbox" href="images/products/pdt-screws1.jpg"><img src="images/products/pdt-screws1.jpg"/></a></td>
						</tr>
					</table>
				</div>
			</div>
			<div id="id_promotions" class="text hidden">
				<p><h2>Promotions >></h2></p>
				<p>No promotion at this time. Please check back later. </p>
				<p>*----*----*----*----*----*----*----*----*----*----*</p>
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
			<div id="id_aboutus" class="text hidden">
				<p><h2>About Us >></h2></p>
				<p>Sanfa Construction Supply was established in 2002. Our main products are Maya Cement, Steel, and Roller Shutter Doors.  
				Though these are our main products, we also offer a variety of hardware products that suit your every need.   
				The variety of construction and carpentry supplies at our hardware store include, but are not limited to: Nails, tying wire, doors, lumbers, and many other construction supplies. 
				The founder of this company is Mr. Hsi-Fa Wu. The company's current location is in Corozal, Belize. Central America. Throughout theyears, we have made many improvements, not only with our products but also our services.</p>
			</div>
			
			<!-- Contact Us -->
			<div id="id_contactus" class="text hidden">
				<p><h2>Contact Us >></h2></p>
				<div class="contact-form">
					<form id="contact-form" action="" method="POST">
					
						<table id="form-table" class="center">
							<tr>
								<td>Name/Company: *</td>
								<td><input type="text" id="name" class=
									"required" style="width:200px;"></td>
							</tr>
							<tr>
								<td>Email: *</td>
								<td><input type="text" id="email" class=
									"required" style="width:200px"></td>
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
								<td style="vertical-align: text-top;">Comments: *</td>
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
	
	<div class="clear"></div>
	
	<div class="footer center">
		<center>Copyright © 2012 San-Fa Inc. All rights reserved.<br>
		Written by: <a href="http://www.exdreamstudio.com">eXDream Inc</a>.</center>
	</div>
</body>
</html>
