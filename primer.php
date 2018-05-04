<?php 
$k = Array( 
1 => Array( 
'FIO' => "Сашко Н. А.", 
'POSITION' => "инструктор", 
'DEPARTMENT' => "кадрового обеспечения" 
) , 
2 => Array( 
'FIO' => "Мишин И.", 
'POSITION' => "лаборант", 
'DEPARTMENT' => "аналитический" 
) , 
3 => Array( 
'FIO' => "Альтов С. А.", 
'POSITION' => "руководитель", 
'DEPARTMENT' => "аналитический" 
) 
); 
echo "<pre>"; 
print_r($k); 
echo "</pre>"; 
$ar_sort = array(); 
foreach($k as $value) 
{ 
$ar_sort[] = $value['FIO']; 
} 
array_multisort($ar_sort, SORT_ASC, $k); 
echo "<pre>"; 
print_r($k); 
echo "</pre>";


echo rand(5, 100); 
?>
