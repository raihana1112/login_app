<?php 	


include 'conn.php';

$nama_lahan = $_POST['nama_lahan'];
$luas_lahan = $_POST['luas_lahan'];
$komoditas = $_POST['komoditas'];
$hasil_panen = $_POST['hasil_panen'];
$bulan = $_POST['bulan'];
$kabupaten = $_POST['kabupaten'];
$kecamatan = $_POST['kecamatan'];
$desa = $_POST['desa'];


	$query = "INSERT INTO stock(nama_lahan, luas_lahan, komoditas, hasil_panen, bulan, kabupaten, kecamatan, desa) VALUES('".$nama_lahan."','".$luas_lahan."', '".$komoditas."','".$hasil_panen."', '".$bulan."','".$kabupaten."', '".$kecamatan."', '".$desa."')";

	$result = $connect->query($query);



 ?>