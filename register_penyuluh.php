<?php 

include 'conn.php';

$nama_lengkap = $_POST['nama_lengkap'];
$instansi = $_POST['instansi'];
$id_penyuluh = $_POST['id_penyuluh'];
$telp = $_POST['telp'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];


	$query = "INSERT INTO user(nama_lengkap, instansi, id_penyuluh, telp, username, password, level) VALUES('".$nama_lengkap."','".$instansi."', '".$id_penyuluh."','".$telp."', '".$username."','".$password."', '".$level."')";

	$result = $connect->query($query);


 ?>