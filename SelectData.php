<?php require ('connect.php');
$need =$_POST['loginid'];
$query = "SELECT * FROM user WHERE $need = '$loginid'";
?>
