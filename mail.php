<?php 
	$to = "Ateeqrehman4344@gmail.com";
	$subject = "Test Email";
	$message = "Hi, How are you. This is a test email!";
	$from = "shopex@gmail.com";
	$headers = "From. $from";

	mail($to, $subject, $message, $headers);
 
	echo "Mail send";
 ?>