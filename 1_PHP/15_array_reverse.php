<?php
/*
14. Как перевернуть массив? Есть массив array(‘h’, ‘e’, ‘l’, ‘l’, ‘o’), как из него получить array(‘o’, ‘l’, ‘l’, ‘e’, ‘h’)?
Для этого в PHP есть функция array_reverse().
15. А как перевернуть массив без нее?
*/
//$a = array('h', 'e', 'l', 'l', 'o');
/*$a = array_reverse($a);
print_r ($a);
var_dump($a);
*/echo "<hr />";

//echo count($a);
/*for ($i=count($a)-1; $i>=0;$i--){
		echo  "$a[$i]";
}*/
?>

<?php
//Примеры: ВЕЗДЕ ПОМЕНЯТЬ КАВЫЧКИ 
$arr = array ('h', 'e', 'l', 'l', 'o');
$reversed = array();
for ($i=count($arr)-1; $i>=0; $i--) $reversed[] = $arr[$i];
for ($i=0; $i<count($reversed); $i++) echo "$reversed[$i]";
?>

<?php
/*$arr = array(‘h’, ‘e’, ‘l’, ‘l’, ‘o’);
$reversed = array();
for ($i=0; $i<count($arr); $i++) array_unshift($reversed, $arr[$i]); //array_unshift — Добавить один или несколько элементов в начало массива 
for ($i=0; $i<count($reversed); $i++) echo “$reversed[$i]”;
?>
//Или вот так:
<?php
$arr = array(‘h’, ‘e’, ‘l’, ‘l’, ‘o’);
$reversed = array();
foreach ($arr as $v) array_unshift($reversed, $v);
for ($i=0; $i<count($reversed); $i++) echo “$reversed[$i]”;
?>
<?php
$arr = array(‘h’, ‘e’,’l’, ‘l’, ‘o’);
for ($i = 0; $i < floor(count($arr)/2); $i++)   //floor — Округляет дробь в меньшую сторону
{
$tmp = $arr[$i];
$arr[$i] = $arr[count($arr)-$i-1];
$arr[count($arr)-$i-1] = $tmp;
}
for ($i=0; $i<count($arr); $i++) echo “$arr[$i]”;
?>
//И даже так:
<?php
$arr = array(‘h’, ‘e’, ‘l’, ‘l’, ‘o’);
$pieces = count($arr)-1;
$reversed = array();
while($pieces >= 0) {
$reversed[] = $arr[$pieces--];
}
for ($i=0; $i<count($reversed); $i++) echo “$reversed[$i]”;*/
?>




