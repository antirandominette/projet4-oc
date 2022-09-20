<?php	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$heardAboutUs = $_POST['heard-about'];
	$message = $_POST['message'];

	if(
		empty($_POST['name']) && strlen($_POST['name']) == 0 
		|| empty($_POST['email']) && strlen($_POST['email']) == 0 
		|| empty($_POST['heard-about']) && strlen($_POST['heard-about']) == 0 
		|| empty($_POST['message']) && strlen($_POST['message']) == 0
	) {
		return false;
	}

	// 
	// else if(isset($_POST['submit'])) {
	// 	echo "Message from your website<br>You have received a new message. <br><br>Name: $name <br>Email: $email <br>How did you heard about us: $heardAboutUs <br>Message: $message <br><br>From: $email<br>Reply-To: $email<br><br>MIME-Version: 1.0<br>Content-type: text/plain; charset=UTF-8<br><br>";
	// }


	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from your website";
	$email_body = "You have received a new message. \n\n".
		"Name: $name \nEmail: $email \nHow did you heard about us: $heardAboutUs \nMessage: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email";	

	mail($to,$email_subject,$email_body,$headers); // Post message
?>