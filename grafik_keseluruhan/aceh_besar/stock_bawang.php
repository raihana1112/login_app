<?php 

include '../conn.php';

$query = $connect->query("SELECT * FROM stock WHERE komoditas='bawang' and kabupaten='aceh besar'");

$result = array();	
while ($fetchData = $query->fetch_assoc()) {
	$result[] = $fetchData;
}
echo json_encode($result);

 ?>