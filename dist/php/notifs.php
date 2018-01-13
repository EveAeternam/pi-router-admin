<?php
	include("connect-sql.php");
	$sql = "SELECT * FROM `notifs` WHERE seen=0";
	$result = $conn->query($sql);

	echo '<li class="dropdown notifications-menu">';
	echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i><span class="label label-warning">' . $result->num_rows . '</span></a>';
	echo '<ul class="dropdown-menu"><li class="header">You have ' . $result->num_rows . ' notification(s)</li><li>';
	echo '<ul class="menu">';

	$sql = "SELECT * FROM `notifs` WHERE seen=0 LIMIT 5";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo '<li><a href="#"><i class="fa ' . $row["icon"] . ' ' . $row["color"] . '"></i> ' . $row["text"] . ' (' . $row["timestamp"] . ')</a></li>';
		}
	}

	echo '</ul></li><li class="footer"><a href="#">View all</a></li></ul></li>';

	$conn->close();
?>