<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['mesage'];
	
	
	$email_from = "$visitor_email";
	
	$email_subject = "Cerere-Rezervare - ";
	
	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
						"User Message: $message.\n";
						
						
	$to ="maria@vila-maria.online";					
	
	$headers ="From: $email_from \r\n";
	
	
	$headers ="Reply-To: $visitor_email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("Location:index.html");

?>
