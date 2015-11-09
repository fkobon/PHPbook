<?php
$arr = array(1,2,3,4,10,100,3,4987,6,7,8,9);
echo max($arr),"<hr>";
$max = $arr[0];
foreach($arr as $v){
	if($v>$max){
	$max = $v;
	}
}
echo $max;
echo "<hr>";
?>
<?php
$arr = array(5,45,3,4,5,490,62);
$max = $arr[0];
foreach ($arr as $val)
if ($max < $val) $max = $val;
echo $max;
?>
<?php
$arr = array(5,45,3,4,5,490,62);
$max = 0; array_walk($arr, function($i) use (&$max){
if ($max<$i) $max=$i;});
echo $max;
?>
