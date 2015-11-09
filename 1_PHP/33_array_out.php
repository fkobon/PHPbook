<?php
$arr = array(3,8,15,25,16,11,10,5,7,30);
foreach($arr as $v){
	 if($v%5==0){
		echo "$v\n";
	}		
}
?>

<?php
//А можно и так:
$arr = array(3,8,15,25,16,11,10,5,7,30);
array_walk($arr, function($i){ if ($i%5===0)echo "$i</br>";}); //array_walk  Применить пользовательскую функцию к каждому члену массива 
?>