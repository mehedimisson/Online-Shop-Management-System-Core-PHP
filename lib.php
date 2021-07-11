<?php
function loadFromMySQL($sql){
	global $data;
	$conn = mysqli_connect("localhost", "root", "","webtech");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	while($row = mysqli_fetch_assoc($result)) {
		$data[]=$row;
	}
}
?>