<?php 

include 'conn.php';

$username = $_POST['username'];
$telp = $_POST['telp'];
$password = $_POST['password'];


	$query = "UPDATE user SET password='".$password."' WHERE username='".$username."' AND telp='".$telp."'";

	$result = $connect->query($query);


 ?>