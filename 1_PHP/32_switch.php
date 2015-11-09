<?php
header('Content-Type: text/html; charset=utf-8');
function foo($arg){
	switch ($arg){
	 case 2: 
		echo "Двойка";
		break;
	 case 3:
		echo "Тройка";
		break;
	 default : echo "Другое число";
	 break;
	}
}
foo(3);
?>