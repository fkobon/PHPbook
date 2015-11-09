<?php
$str = 'hello';
//$str = strrev($str);
print $str;
echo "<hr>";
for ($i = strlen($str)-1; $i>=0;$i--){
		echo "$str[$i]";
		}
?>



<?php
//Примеры: ВЕЗДЕ ПОМЕНЯТЬ КАВЫЧКИ 
$str = “Turn me baby”;
for ($i = strlen($str); $i>=0; $i--) $rev[] = $str[$i];
$revstr = implode (“”, $rev); ////implode — Объединяет элементы массива в строку
echo $revstr;
?>

<?php
$str = “Turn me baby”;
function myrev($src) {
$length = strlen($src);
for ($i = 0; $i < $length / 2; $i++) {
$a = $src[$i];
$src[$i] = $src[$length - $i - 1];
$src[$length - $i - 1] = $a;
}
return $src;
}
echo myrev($str);
?>

<?php
$a = ‘Turn me baby’;
$b = ‘’;
for ($i = strlen($a)-1; $i>=0; $i--)
$b .= $a[$i];
$a = $b;
echo $a;
?>