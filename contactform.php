<<<<<<< HEAD
<?php

if (isset($_POST['SUBMIT'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];
	
	$mailTo = "robert1971ro@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;
	
	
	
	mail($mailTo,$subject, $txt, $headers);
    header("Location:index.php?mailsend");
}


=======
aaa
>>>>>>> c0379b068a2709e92e2e8745a0d8d382164c97a8
