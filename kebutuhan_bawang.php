<?php 

include 'conn.php';

$query = $connect->query("SELECT * FROM kebutuhan WHERE komoditas='bawang'");

$result = array();
while ($fetchData = $query->fetch_assoc()) {
	$result[] = $fetchData;
}
echo json_encode($result);


 ?>