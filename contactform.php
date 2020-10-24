<?php

if (isset($_POST['submit'])) 
{
    $name = $_POST['name'];
	$mailFrom = $_POST['email'];
	
    $mailTo = "maria@vila-maria.online";
    $subject "Subject: ".subject;
    $message = " ";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name;
	
    mail($mailTo, $subject, $message, $headers, $txt);

}
?>
