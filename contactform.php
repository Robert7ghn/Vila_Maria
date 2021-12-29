<?php
	$name=$_POST['name'];
	$visitor_email=$_POST['email'];

//Recipient						
	$to="maria@vila-maria.ro";					
	
//Subject
	$email_subject="Cerere-Rezervare";
	
//Message
	$message=$_POST['period'];
	$message2=$_POST['nr-pers'];
	$message3=$_POST['nr-cam'];
	$message4=$_POST['nr-nopti'];
	$message5=$_POST['telef'];
	$message6=$_POST['address'];
	
	
	$email_from="$visitor_email";

//Email body	
	$email_body="Nume Client: $name \r\n".
					"Email Client: $visitor_email \r\n".
					"Adresa: $message6 \r\n".
					"Telefon: $message5 \r\n".
						"Perioada rezervare: $message \r\n".
						"Nr.persoane: $message2 \r\n".
						"Nr.camere: $message3 \r\n".
						"Nr.nopti: $message4 \r\n";

//Headers	
    $headers="Content-type: text/html\r\n";
	$headers="From: $email_from\r\n";
	$headers="Reply-To: $visitor_email\r\n";
	
//Send email
	mail($to,$email_subject,$email_body,$headers);
	header("Location:index.html");

?>
