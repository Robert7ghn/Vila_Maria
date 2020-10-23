<?php

if (isset($_POST['submit'])) 
{
    $name = $_POST['name'];
	$mailFrom = $_POST['email'];
	
	$mailTo = "maria@vila-maria.online";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name;
	
	
    mail($mailTo,$subject, $txt, $headers);

}
?>
