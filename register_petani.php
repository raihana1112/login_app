<?php 

include 'conn.php';

$nama_lengkap = $_POST['nama_lengkap'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];


	$query = "INSERT INTO user(nama_lengkap, telp, alamat, username, password, level) VALUES('".$nama_lengkap."','".$telp."','".$alamat."', '".$username."','".$password."', '".$level."')";

	$result = $connect->query($query);


 ?>