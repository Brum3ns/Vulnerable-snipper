<?php


//Check the username from the logged in user : [ The user is able to create his/her own account with a custom username. (username "admin" is taken.) ] <- (Hint)
$username = "guest";

$action = "new_comment";
$comment = "If you don't enjoy coffee, You test it again.";


//Check if the new_comment action is requested by the user:
if ( isset($comment) && $action="new_comment")  {
	if ( user_allowed($username, $action) ) {
	
		//Post new comment on the post:
		post_comment($comment);
		echo ":: New comment was added\n";

	}else {

		echo ":: No change has been made\n";
	}
}


//Check if the user is an admin:
function user_allowed($username, $action) {

	if ( (strtolower($action) == "new_comment") && (strtolower($username) ==  "admin") ) {
		
		echo "[+] Valid\n";
		return true;

	}else {
		
		echo "[!] Invalid\n";
		return false;
	}


	//If nothing then return false (obv not got the priv):
	return false;
}


function post_comment($comment) {
	/*-.-.-.-....-.-.--.
	|*----..-code--.-.-.
	 \*--.--.--.-.-.----.
	*/
	 return ":: status updated";
}


?>