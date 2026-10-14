<?php
	include("connect-sql.php"); 

// Escape user inputs for security
$id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;

$sql = "DELETE FROM `web-blacklist` WHERE id=$id";

	if($conn->query($sql) === true){
		$msg = "Record deleted successfully!";
		$msgtype = "success";
	} else{
		$msg = "Could not execute $sql. " . $conn->error;
		$msgtype = "alert";
	}
 
// Close connection
$conn->close();

header('Location: ../../parental.php?msgtype=' . urlencode($msgtype) . '&msg=' . urlencode($msg));
?>