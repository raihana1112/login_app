<?php 

include '../conn.php';

$query = $connect->query("SELECT * FROM stock WHERE komoditas='cabai' and kabupaten='lhok'");

$result = array();
while ($fetchData = $query->fetch_assoc()) {
	$result[] = $fetchData;
}
echo json_encode($result);


 ?>