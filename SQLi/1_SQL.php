<?php

 /* Database credentials (To run this locally you have to setup a new "database" + "new user")
 \  You also need to creat the "table" + "columns" (TABLE="users", COLUMNS="id", "name")
*/
$servername = "localhost";
$database = "test";
$username = "test";
$password = "<your_password>";


echo "Starting database connection\n";
$mysql_db = mysqli_connect($servername, $username, $password, $database);


if ($mysql_db->connect_error) {
	die(":: Connection failed: " . $mysql_db->connect_error);
}

echo ":: Connected to database [".$database."] as user [".$username."]\n";


//User input [id]:
$id = readline("Select your username ID: ");

$sql_checkUsername = mysqli_query($mysql_db, "SELECT name FROM users WHERE id = {$id}");
$old_username = $sql_checkUsername->fetch_array(MYSQLI_BOTH);

printf("\n-> Current username: [%s]\n", $old_username["name"]);


 /* Change the username at the profile page
 \  This is so users can change their username and customize their profile!
*/

//User input [new_username]:
$new_username = readline("new username: ");

$sql_update_UserName = mysqli_query($mysql_db, "UPDATE users SET name = '{$new_username}' WHERE id = {$id}");

echo "The username has been updated from [{$old_username["name"]}] to [{$new_username}] for the user with id [{$id}] has been updated!";



mysqli_close($mysql_db);

?>
