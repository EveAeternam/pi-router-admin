<?php
	include("connect-sql.php"); 
	
	function get_title($url){
	  $str = file_get_contents($url);
	  if(strlen($str)>0){
		$str = trim(preg_replace('/\s+/', ' ', $str)); // supports line breaks inside <title>
		preg_match("/\<title\>(.*)\<\/title\>/i",$str,$title); // ignore case
		return $title[1];
	  }
	}

// Escape user inputs for security
$link = $conn->real_escape_string($_REQUEST['link']);

$link = filter_var($link, FILTER_SANITIZE_URL);

if (!filter_var($link, FILTER_VALIDATE_URL, FILTER_FLAG_SCHEME_REQUIRED)) {
	$link = "http://" . $link;
}

// Validate url
if (filter_var($link, FILTER_VALIDATE_URL)) {
    $linkhost = parse_url($link, PHP_URL_HOST);
	$ip = gethostbyname($linkhost . ".");
	$title = get_title($link);
	
	$sqlcheck = "SELECT ip FROM `web-blacklist` WHERE ip='" . $ip . "'";
	$result = $conn->query($sqlcheck);
	
	  if ($result->num_rows != 0)
	  {
		  	$msg = "Record for " . $link . " already exists!";
			$msgtype = "alert";
	  } else {

		// attempt insert query execution
		$sql = "INSERT INTO `web-blacklist` (link, title, ip) VALUES ('$linkhost', '$title', '$ip')";
		if($conn->query($sql) === true){
			$msg = "Records inserted successfully for " . $title . " at ". $link . " (" . $ip . ").";
			$msgtype = "success";
		} else{
			$msg = "Could not execute $sql. " . $conn->error;
			$msgtype = "alert";
		}
	  }
}


 
// Close connection
$conn->close();

header('Location: ../../parental.php?msgtype=' . $msgtype . '&msg=' . $msg);
?>