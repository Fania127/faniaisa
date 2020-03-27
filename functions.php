<?php 
$dbhost = getenv("MYSQL_SERVICE_HOST");
$conn = mysqli_connect($dbhost, "root", "ubaya", "isadb");

function query($query){
	global $conn;
	$result =  mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

 ?>