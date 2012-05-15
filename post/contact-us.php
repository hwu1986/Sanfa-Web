<?php
if ($_POST) {
	$post = $_POST;
	
	$email_content = '
	<html><head><title>New Inquiry from San-Fa Website</title></head>
	<body>
	<h3>New Inquiry From San-Fa Website</h3>
	Date: .'.date('Y-m-d').'<br>
	Name: '.$post['name'].'<br>
	Email: '.$post['email'].'<br>
	Type: '.$post['type'].'<br>
	Comment: '.$post['comment'].'<br>
	</body>
	</html>
	';
	
	$to = 'hwu1986@gmail.com';
	$subject = 'New Inquiry from San-Fa Website';
	$message = $email_content;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Additional headers
	$headers .= 'To: Steve <hwu1986@gmail.com>' . "\r\n";
	$headers .= 'From: San-Fa Web <noreply@sanfa.bz>' . "\r\n";
	
	if (mail($to, $subject, $message, $headers)) {
		echo json_encode(array('success' => 'true'));
	} else {
		echo json_encode(array('success' => 'false'));
	} 
}