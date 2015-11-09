<?php
$str = "0";
if (!$str) echo "EMPTY</br>";
else echo 'NOT EMPTY';

if (empty($str)) echo 'EMPTY</br>';
else echo 'NOT EMPTY';

if (!strlen($str)) echo "EMPTY</br>";
else echo "NOT EMPTY";
/*Ответ:    EMPTY
    		EMPTY
  		NOT EMPTY
*/
?>
