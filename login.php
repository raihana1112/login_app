<?php
include 'conn.php';
$username = "simax1721";
$password = "$2y$10$6OON1IiRsxx8boaeh3j8PORE7fNphM3Nt1LrPXXKWX0ZUyRIopij2";
$queryResult = $connect->query("SELECT * FROM users WHERE username='" . $username . "' and password='" . $password . "' ");

$result = array();
while ($fetchData = $queryResult->fetch_assoc()) {
	$result[] = $fetchData;
}
echo json_encode($result);
