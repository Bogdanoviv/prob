<!--  
Сгенерировать двумерный массив, заполнив его случайными числами** в диапазоне 
от 1 до 100. Сохранить его в файле array2.txt, каждая строка файла представляет 
собой строку массива, разделитель чисел – пробел. Результат генерации вывести в виде 
таблицы на экран. Название файла lab5_2.php.
** rand(min, max)
-->
<!doctype html>
<html>
<head>
<title>лабораторная работа №5_2</title>
<style>
table {
	width: 70%; /* Ширина таблицы */
    background: white; /* Цвет фона таблицы */
    color: white; /* Цвет текста */
    border-spacing: 1px; /* Расстояние между ячейками */
}
td{
    background: green; /* Цвет фона ячеек */
    padding: 2px; /* Поля вокруг текста */
   }
</style>
</head>
<body>

<?php
$file = 'text/array21.txt';
define("divider"," ");
$current = array();
$array = array();
for ($c=0;$c<10;$c++){
	for($r=0;$r<10;$r++){
		$array[$c][$r] = rand(1,100);
		$current[] = $array[$c][$r].divider;
	}
	$current[]=PHP_EOL;
}

file_put_contents($file, $current, FILE_APPEND | LOCK_EX);



?>

<?php
print "<pre>";
print_r ($array);
print "</pre>";
echo '<table>';
echo "<ol>";
foreach ($array as $key => $value){
	//	echo ("<tr> $key");
		foreach($value as $key1=>$value1){
			echo ("<td> $value1</td>");
		}
		echo ("</tr>");
}
echo "</ol>";
echo '</table>';

?>
</body>
</html>
