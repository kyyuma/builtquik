<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'builtqui_liftingpoint');
define('DB_USER','builtqui_admin'); //defines database information, passwords, database name, needs different definations depending on database setup
define('DB_PASSWORD','VUinxdYA2Vwl');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) //makes connection or shows error if can't connect
or die("Failed to connect to MySQL: " . mysqli_connect_error());

$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_connect_error()); //selects database or shows error on fail
if (mysqli_connect_errno($con))
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
else
	{
	//echo "Successfully connected to your database…";if connection successful everything should just move forward, no notification needed
	}
// Page Autors
// Matthew Winslow
?>
