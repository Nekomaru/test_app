<?php
	include_once("classes.php");
	$dbh = new PDO('mysql:host=localhost;dbname=test_app', "test_app", "otakuruletheworld");
	
	HyperText::showHTMLPageHead();

	HyperText::include_css("../css/add_edit_post.css");
	HyperText::include_js_script("../js/jQuery.js");
	HyperText::include_js_script("../js/pass_check.js");
	HyperText::sendHeader();
	
	HyperText::showHyperText("<body>");
	HyperText::showHyperText("<div id=wrapper>");
	
	HyperText::showHyperText("<a id=return_to_posts_button href='posts'>Вернуться к списку постов</a>");
	
	if (isset($_POST["post_id"])) 
	{
		$post_info = $dbh->query('SELECT * from posts WHERE id='.$_POST["post_id"]);
		$row = $post_info->fetch();
		HyperText::showPostEditForm($row["post_name"], $row["post_content"], $_POST["post_id"]);
	}
	else
		HyperText::showPostEditForm("", "", "-1");
		
	HyperText::showHyperText("</body>");
	HyperText::showHTMLPageBottom();

?>