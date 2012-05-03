<?php
	$dbh = new PDO('mysql:host=localhost;dbname=test_app', "test_app", "otakuruletheworld");
	
	if ($_POST["post_id"] != -1)
	{
		$dbh->query ("UPDATE posts SET post_name = '".$_POST["post_name"]."', post_content = '".$_POST["post_content"]."'
                          WHERE id=".$_POST["post_id"]);
						  
	}
	else
	{
		$sth = $dbh->prepare ("INSERT INTO posts (post_name, post_content, post_date)
                          VALUES (:post_name, :post_content, CURDATE())");
	
		$sth->bindValue(":post_name", $_POST["post_name"]);
		$sth->bindValue(":post_content", $_POST["post_content"]);
		
		$sth->execute();
	}

	header('Location: ../posts');
?>