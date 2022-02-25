<?php

function create_token($reset_token) {
	
	$randint = rand(100000000,90000000);
	$reset_token = hash('sha256', $randint);

	return $reset_token;
}

#Store reset token as valid for the given email and account "x" time:
function store_token($reset_token, $email) {

	create_token($reset_token);
	/*
	* -.-.-..--.-.-.--.-
	*.-..-...code-.-.-..
	*.-..-.-..-.-.---.-.
	*/
	return true;
}

$email = $_GET["email"];

if ( isset($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ) {
	
	$reset_token = "";
	$Valid_token = create_token($reset_token);
	$domain = $_SERVER['HTTP_HOST'];

	$resetPw_link = "$domain/reset/?token=$Valid_token";
	echo $resetPw_link;

	#$message = htmlspecialchars("Your reset link to your account can be find here: " . $resetPw_link]);

	// In case any of our lines are larger than 70 characters, we should use wordwrap()
	#$message = wordwrap($message, 70, "\r\n");

	// Send
	#mail('caffeinated@example.com', 'My Subject', $message);
}

?>