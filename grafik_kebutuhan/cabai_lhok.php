<?php 

include 'conn.php';

//$filter = $_GET['filter'];
$query = $connect->query("SELECT * FROM kebutuhan WHERE komoditas='cabai' and kabupaten='lhokseumawe'");
// if ($filter = 'cabai') {
// 
// }elseif ($filter = 'bawang') {
// 	$query = $connect->query("SELECT * FROM kebutuhan WHERE komoditas='bawang'");
// }elseif ($filter = 'beras') {
// 	$query = $connect->query("SELECT * FROM kebutuhan WHERE komoditas='beras'");
// }
$result = array();	
while ($fetchData = $query->fetch_assoc()) {
	$result[] = $fetchData;
}
echo json_encode($result);

 ?>