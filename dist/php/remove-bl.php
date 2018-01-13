<?php
	include("connect-sql.php"); 

// Escape user inputs for security
if(isset($_GET["id"])) $id = htmlspecialchars($_GET["id"]);

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

header('Location: ../../parental.php?msgtype=' . $msgtype . '&msg=' . $msg);
?>