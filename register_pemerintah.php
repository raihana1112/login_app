<?php 

include 'conn.php';

$nama_lengkap = $_POST['nama_lengkap'];
$instansi = $_POST['instansi'];
$nip = $_POST['nip'];
$telp = $_POST['telp'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];


	$query = "INSERT INTO user(nama_lengkap, instansi, nip, telp, username, password, level) VALUES('".$nama_lengkap."','".$instansi."', '".$nip."','".$telp."', '".$username."','".$password."', '".$level."')";

	$result = $connect->query($query);


 ?>