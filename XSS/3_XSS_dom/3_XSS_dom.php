<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Coffee shop</title>
</head>
<body>

<form id="search_form"> 
  <input type="search" id="search" name="s" placeholder="Search for awesome coffee...">
  <button>Search</button>
</form>

<script>

	var s = "<?php echo htmlentities($_GET['s']); ?>";
	var result = `<br><b value='${s}'> Result: [${s}] </b>`;
	
	document.write(result);

	function collect(s) {
		/*
		* -..-..-.-.-.--.
		*.-.-.-code.-.---
		*.-.-..-.--.--.--
		*/
	}


	
</script>

</body>
</html>