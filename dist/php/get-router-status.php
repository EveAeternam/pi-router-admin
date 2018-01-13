<?php
	include("connect-sql.php"); 
	$sql = "SELECT ssid, pass, channel, region FROM status;";

	$result = $conn->query($sql);
	if ($result->num_rows <= 0) {
		die("Fatal error! No admin account! (Error 14: SQL user db)");
	}

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$ssid = $row["ssid"];
			$pass = $row["pass"];
			$chan = $row["channel"];
			$reg = $row["region"];
		}
	}

	$conn->close();
?>