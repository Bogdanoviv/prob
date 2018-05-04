<!--  
Загрузить из файла array2.txt массив, вывести его в исходном и отсортированном по
 возрастанию виде. Предусмотреть 2 кнопки – «По возрастанию» и «По убыванию». 
 По нажатию на кнопки выполняется загрузка массива и соответствующая операция 
 сортировки. Название файла lab5_3.php.
-->
<!doctype html>
<html>
<head>
<title>лабораторная работа №5_3</title>
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
$file = "text/array2.txt";
//$array2=file($file);
//print_r ($array2);
$arr= implode("",file($file));
$array1 = explode(" ",$arr);

echo "Вывод массива в исходном виде:<br/>";

$array1_table=array_chunk($array1,10);
/*
print "<pre>";
print_r ($a);
print "</pre>";
*/
echo '<table>';
echo "<ol>";
function table1($a){
foreach ($a as $key => $value){
	//	echo ("<tr> $key");
		foreach($value as $key1=>$value1){
			echo ("<td> $value1</td>");
		}
		echo ("</tr>");
}
echo "</ol>";
echo '</table>';
}
table1($array1_table);


if(isset($_POST['up'])){
echo "<br/>Вывод массива в отсортированном виде по возрастанию: <br />";
array_multisort($array1,SORT_NUMERIC,SORT_ASC);
$array11=array_chunk($array1,10);
table1($array11);
}
if(isset($_POST['down'])){
echo "<br/>Вывод массива в отсортированном виде по убыванию: <br />";
array_multisort($array1,SORT_NUMERIC,SORT_DESC);
$array12=array_chunk($array1,10);
table1($array12);
}
/*
print "<pre>";
//var_dump($array1);
print_r($array11);
print "</pre>";
*/

?>

<form  method = "post">
	<p><input name="up" type = "submit" value="По возрастанию"></p>
	<p><input name="down" type = "submit" value="По убыванию"></p>
</form>

</body>
</html>