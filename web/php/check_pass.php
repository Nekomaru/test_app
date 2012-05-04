<?php

	$dbh = new PDO('mysql:host=localhost;dbname=test_app', "test_app", "otakuruletheworld");

	$result = $dbh->query("SELECT password FROM password");
	$row = $result->fetch();
	
	if ($row["password"] == $_POST["pass"])
		echo json_encode(array('auth' => 1));
	else
		echo json_encode(array('auth' => 0));
?>