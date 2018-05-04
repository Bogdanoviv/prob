<!Doctype html>
<html>
<head>
<title>Лаборараторная №5_1</title>
</head>
<body>
<?php
$array = array(
	"http://ya.ru"=>"Яндекс",
	"http://google.ru"=>"Google",
	"http://kubsau.ru"=>"Кубгау",
	"http://youtube.com"=>"youtube",
	"http://vk.com"=>"Вконтакте",
	"http://ok.ru"=>"Одноклассники",
	"http://mail.ru"=>"mail",
	"http://github.com"=>"github",
	"http://toster.ru"=>"toster",
	"http://habrahabr.ru"=>"хабрхабр",
);
print "<pre>";
print_r ($array);
print "</pre>";
?>

<ol>
<?php
	foreach($array as $key=>$value){
		echo ("<li><a href=$key>$value<a/></li>");
	}

?>
</ol>


</body>
</html>