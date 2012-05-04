<?php
	include_once("classes.php");
	$dbh = new PDO('mysql:host=localhost;dbname=test_app', "test_app", "otakuruletheworld");
	
	HyperText::showHTMLPageHead();
	
	HyperText::include_js_script("../js/disqus.js");
	HyperText::include_css("../css/post.css");
	HyperText::sendHeader();
	
	HyperText::showHyperText("<body>");
	HyperText::showHyperText("<div id=wrapper>");
	
	HyperText::showHyperText("<a id=return_to_posts_button href='../posts'>Вернуться к списку постов</a>");
	
	$post_info = $dbh->query('SELECT * from posts WHERE id='.$_POST["post_id"]);
	foreach($post_info as $row)
		HyperText::showPost($row["post_name"], $row["post_content"], $row["post_date"]);
	
	HyperText::showHyperText('<div id="disqus_thread"></div>');
	
	HyperText::showHyperText("</div>");
	HyperText::showHyperText("</body>");
	HyperText::showHTMLPageBottom();
?>