<?php
	include_once("php/classes.php");
	
	HyperText::showHTMLPageHead();
	HyperText::showHyperText("<body>");
	
	HyperText::include_css("css/owner_posts.css");
	
	HyperText::sendHeader();
	
	$dbh = new PDO('mysql:host=localhost;dbname=test_app', "test_app", "otakuruletheworld");
	
	HyperText::showHyperText("<div id=wrapper>");
	HyperText::showHyperText("<a id=new_post_button href=new>Создать новый пост</a>");
	
	foreach($dbh->query('SELECT `id`, `post_name` FROM posts ORDER BY id DESC') as $row)
		HyperText::showShortPost($row["post_name"], $row["id"]);
	
	HyperText::showHyperText("</div>");
	
	HyperText::showHyperText("</body>");
	HyperText::showHTMLPageBottom();

?>