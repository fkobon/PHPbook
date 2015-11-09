<?php
//49. Какой будет результат выполнения этого скрипта?
$arr = array(1,2,3,4,5,6,7,8,9);
$count = count($arr);
if ($count = 0) {// = присваивание , не сравнение, if даёт false, сработает else.
echo "Array is empty.";
} else {
echo "Array contains $count elements.";
}
?>
