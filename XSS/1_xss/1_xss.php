<?php

$input = readline('Change username: ');

//Filter HTML
function filterHTML($input) {

	$input = strip_tags($input);

	$input = str_replace('"', '\"', $input);
	$input = str_replace('\\', '\\\\', $input);
	
	return $input;
}

?>

<html>
<head>
	<meta src="/asset/js/main.js">
	<link rel="stylesheet" type="text/javascript" href="//asset/js/request.js">
</head>
<body>
	<form>
	  <div>
	    <label for="changeUsername">Change username: </label>
	    <input id="changeUsername" type="text" name="text" value="<?php echo filterHTML($input); ?>">
	  </div>
	  <div>
	    <input type="submit" value="Change" onclick="request.js">
	  </div>
	</form>
</body>
</html>
