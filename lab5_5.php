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


$file = "lab5_5.txt";
$fil=file($file);
echo "<pre>";
print_r($fil);
echo "</pre>";

// Преобразование со строки в массив
$array = array();
foreach($fil as $key => $value){
	$value =explode('|',$value);
	
	$value[0]= explode(' ',$value[0]);
	print_r($value[0][0]);
	$array2['FIO']=$value[0][0];
	print($value[0][1]);
	if (isset($value[0][1]))$array2['FIO'].=' '.mb_substr($value[0][1],0,1,'UTF-8').'.';
	if (isset($value[0][2]))$array2['FIO'].= mb_substr($value[0][2],0,1,'UTF-8');
	$array2['POSITION']=$value[1];
	$array2['DEPARTMENT']=$value[2];
	$array[]=$array2;
}
echo "<pre>";
print_r($array);
echo "</pre>";

echo"Отсортированный массив";
//отсортировать массив по ключу и преобразовать
//отсортированный массив в набор строки (разделить " : ") 

krsort($array);

foreach($array as $value){
	$array_sort .= implode(':',$value);
	if (substr($array_sort,-1,1)!="\n"){
		$array_sort.="\n";
	};


}
	echo "<pre>";
	print_r($array_sort);
	echo "</pre>";	

$file_new = "lab5_5_new.txt";
if(file_put_contents($file_new,$array_sort,LOCK_EX))echo "Файл записан";


// Вывод содержимого из файла
$list = file($file_new);

echo "<pre>";
print_r($list);
echo "</pre>";

$encod =mb_detect_encoding($list) ;
echo $encod;

?>
<table>
<tr>
<td>FIO</td>
<td>POSITION</td>
<td>DEPARTMENT</td>
</tr>


<?php 
foreach($list as $value){
	echo '<tr>';
	$value = explode(':',$value);
	foreach($value as $value2)
		echo '<td>'.$value2.'</td>';
		echo '</tr>';
}
?>
</table>
</body>
</html>