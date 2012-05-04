$(document).ready(function(){
	
	$("#submit").hide();

	$("input[name=pass]").focus(function(){
		$("#click_to_check")[0].innerHTML = 'Кликните сюда для проверки пароля';
	});
	
	$("#click_to_check").click(function(){
		$.post('../php/check_pass.php', {"pass" : $("input[name=pass]")[0].value}, function(json){
			if (json.auth == 1)
			{
				$("#click_to_check")[0].innerHTML = '';
				$("#submit").show();
			}
			else
				$("#click_to_check")[0].innerHTML = 'Не верный пароль';
		}, "json");
	});
});