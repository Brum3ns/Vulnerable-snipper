<?php

$page = $_GET["page"];

//Filter user input:
function filter($page) {

   $whitelist = ["html", "htm", "txt", "pdf"];
   $blacklist = ["/", "\\"];

   $ext = pathinfo($page, PATHINFO_EXTENSION);
   
   for ( $i=0; $i != strlen($page); $i++ ) {
      if ( in_array($page[$i], $blacklist) ) {
         return "Forbidden";
      }
   }

   if ( in_array($ext, $whitelist) ) {
      return $page;
   }

   //If nothing was done. Threat it like a malicous input and forbid it:
   return "Forbidden";
}

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <title>Home page</title>

</head>
<body>

<pre>
<?php

//Execute and display content
if ( isset($page) ) {

   echo "<b> content of the file: ". filter($page) ."</b>";
   /*
   * ....
   * ....
   * ....
   */
}


else {
   $result = "<b> No page was given </b>";
   echo $result;
}

?>
</pre>

</body>
</html>