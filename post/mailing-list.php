<?php
if ($_POST) {
	$post = $_POST;
	
	$email_content = '
	<html><head><title>New Email Subscription from San-Fa Website</title></head>
	<body>
	<h3>New Email Subscription From San-Fa Website</h3>
	Date: '.date('Y-m-d').'<br><br>
	Email: '.$post['email'].'<br>
	</body>
	</html>
	';
	
	$to = 'swu@sanfa.bz, hwu@sanfa.bz, awu@sanfa.bz';
	$subject = 'New Email Subscription from San-Fa Website';
	$message = $email_content;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Additional headers
	$headers .= 'To: Steve Wu<swu@sanfa.bz>, Henry Wu<hwu@sanfa.bz>, Anny Wu<awu@sanfa.bz>' . "\r\n";
	$headers .= 'From: San-Fa Web <noreply@sanfa.bz>' . "\r\n";
	
	if (mail($to, $subject, $message, $headers)) {
		echo json_encode(array('success' => 'true'));
	} else {
		echo json_encode(array('success' => 'false'));
	} 
}
