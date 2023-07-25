<?php 

include 'conn.php';

$id_user = $_POST['id_user'];
$nama_lengkap = $_POST['nama_lengkap'];
$instansi = $_POST['instansi'];
$nip = $_POST['nip'];
$telp = $_POST['telp'];
$username = $_POST['username'];
$password = $_POST['password'];


	$query = "UPDATE user SET nama_lengkap='".$nama_lengkap."', instansi='".$instansi."', nip='".$nip."', telp='".$telp."', username='".$username."', password='".$password."' WHERE id='".$id_user."' ";

	$result = $connect->query($query);


 ?>