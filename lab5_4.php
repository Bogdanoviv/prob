<!doctype html>
<html>
<head>
	<title>Лабораторная 5</title>
	<meta charset="utf8">
	<style>
		table.list {border-collapse: collapse;}
		.list td, .list th {padding: 10px; border: 2px solid green; text-align: center;}
		.list th:first-child, .list td:first-child {font-weight: bold;}
		.a {background: #7fc7ff;}
		.b {background: #fde910;}
	</style>
</head>
<body>
<form action="lab5_4.php" method="post">
	<table>
		<tr>
			<td>X</td>	<td><input type="text" name="x"> (A)</td>
		</tr><tr>	
			<td>Y</td>	<td><input type="text" name="y"> (A, B)</td>
		</tr><tr>
			<td>Z</td>	<td><input type="text" name="z"> (B)</td>
		</tr>
	</table>
	<input type="submit" value="Цвет">
</form>
<hr/>
<table class="list">
<?php
$x = $y = $z = 0;
# Запрос
if(isset($_POST['x']) && isset($_POST['y'])){
	$x = intval($_POST['x']);
	$y = intval($_POST['y']); 
}
if(isset($_POST['z']) && isset($_POST['y'])){
	$z = intval($_POST['z']);
	$y = intval($_POST['y']); 
}

$file = 'text/array2.txt';
$data = file($file); 
foreach($data as $key => $value){ 
	$value = explode(' ', $value); 
	if(!isset($t)){ echo '<tr><th></th>'; foreach($value as $key2 => $value2) echo "<th>$key2</th>"; echo '</tr>'; $t = true;}
	unset($key2, $value2, $t);
	echo '<tr>';
		if(!isset($t)){ echo "<td>$key</td>"; $t = true;}
		foreach($value as $value2){ 
			if($value2 >= $x && $value2 <= $y) $class = 'a';
			else if($value2 > $y && $value2 <= $z) $class = 'b';
			else $class = '';
			echo "<td class='$class'>$value2</td>";
		}
	echo '</tr>';
}
?>
</table>
</body>
</html>