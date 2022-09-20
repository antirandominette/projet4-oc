<?php
	if(
		empty($_POST['name']) && strlen($_POST['name']) == 0 
		|| empty($_POST['email']) && strlen($_POST['email']) == 0 
		|| empty($_POST['heard-about']) && strlen($_POST['heard-about']) == 0 
		|| empty($_POST['message']) && strlen($_POST['message']) == 0
	) {
		return false;
	} // Checks if all values are null && if the length of the str is == 0 

	// Values are non null so we stock them in variables that will be needed to create the mail.
	$name = $_POST['name'];
	$email = $_POST['email'];
	$heardAboutUs = $_POST['heard-about'];
	$message = $_POST['message'];

	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from your website";
	$email_body = "You have received a new message. \n\n".
		"Name: $name \nEmail: $email \nHow did you heard about us: $heardAboutUs \nMessage: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email";	

	// Checks if mail is sent. If so -> display mail_success.php else display mail_fail.php
	if(mail($to,$email_subject,$email_body,$headers)) {
		include("./mail_success.php");
	} 
	else {
		include("./mail_fail.php");
	}
?>