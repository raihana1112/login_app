<?php
include 'conn.php';

$id_user = $_GET['id_user'];
$queryResult = $connect->query("SELECT * FROM user WHERE id='". $id_user."'");

$result = array();
while ($fetchData = $queryResult->fetch_assoc()) {
	$result[] = $fetchData;
}
echo json_encode($result);

