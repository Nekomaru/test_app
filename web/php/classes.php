<?php
	class HyperText
	{
		public static $headerContent = "";
	
		public static function showHyperText($ht)
		{
			echo $ht;
		}
		
		public static function showHTMLPageHead()
		{
			echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml">';
		}
		
		public static function showHTMLPageBottom()
		{
			echo "</html>";
		}
		
		public static function showShortPost($post_name, $post_id)
		{ 
			echo('<div class="short_post">');
			echo('<form method="post" action="post">');
			echo('<input type="submit" class="show_post" value="'.$post_name.'" title="'.$post_name.'"/>');
			echo('<input type="hidden" name="post_id" value='.$post_id.' />');
			echo('</form>');
			echo('<form method="post" action="edit">');
			echo('<input type="submit" class="edit_post" value="Редактировать"/>');
			echo('<input type="hidden" name="post_id" value='.$post_id.' />');
			echo('</form>');
			echo('<div class="clear"></div>');
			echo('</div>');

		}
		
		public static function include_css($css_path)
		{
			self::$headerContent .= '<link rel="stylesheet" href='.$css_path.' type="text/css">';
		}
		
		public static function sendHeader()
		{
			echo('<head>');
			echo(self::$headerContent);
			echo('</head>');
		}
		
		public static function include_js_script($js_path)
		{
			self::$headerContent .= '<script type="text/JavaScript" src="'.$js_path.'"></script>';
		}
		
		public static function showPost($post_name, $post_content, $post_date)
		{
			echo('<div id="post">');
			echo('<div id="post_name">'.$post_name.'</div>');
			echo('<div id="post_date">'.$post_date.'</div>');
			echo('<div id="post_content">'.$post_content.'</div>');
			echo('</div>');
		}
		
		public static function showPostEditForm($post_name, $post_content, $post_id)
		{
			echo('<form method="post" action="php/add_edit_post.php"><div id="post_edit_form">');
			echo('Название поста: <input maxlength=1000 size=45 name="post_name" id="post_name" value="'.$post_name.'"><br>');
			echo('Содержание поста: <textarea cols=50 rows=20 name="post_content" "id="post_content">'.$post_content.'</textarea><br>');
			echo('Пароль: <input type="password" name="pass" /><br><a id="click_to_check">Кликните сюда для проверки пароля</a><br>');
			echo('</div><input type="hidden" name="post_id" value='.$post_id.'><input id="submit" type="submit" value="Отправить"></form>');
		}
	}
?>