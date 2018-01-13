<?php
	include("connect-sql.php"); 
	$sql = "SELECT fullname, pic FROM user ORDER BY id DESC LIMIT 1;";

	$result = $conn->query($sql);
	if ($result->num_rows <= 0) {
		die("Fatal error! No admin account! (Error 14: SQL user db)");
	}

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$fullname = $row["fullname"];
			$pic = $row["pic"];
		}
	}

	$conn->close();
?>