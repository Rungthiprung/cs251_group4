<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="0896812455";
$dbname="practice";
$conn = mysqli_connect($dbhost, $dbuser, $dbname, $dbname) or die('Error connect ');
mysqli_query($conn,'SET NAME utf8');
//mysql_select_db($dbname);
?>
