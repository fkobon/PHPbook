<?php
/*39. Напиши программу-цензор, которая бы заменяла вводимые пользователем
 в форму слова “fuck”, “idiot” и “bitch” на “f**k”, “id**t” и “bi**h”.*/
$find = array('fuck', 'idiot', 'bitch');
$replace = array('f**k', 'id**t', 'bi**h');
If (isset($_POST['user_input']) && !empty($_POST['user_input'])) {
$user_input = $_POST['user_input'];
$user_input_new = str_ireplace($find, $replace, $user_input); /* str_ireplace Эта функция возвращает строку или массив subject , в котором все вхождения search (без учета регистра символов) заменены на replace . 
Если subject - массив, поиск и замена производится в каждом элементе этого массива, и возвращается также массив. 
Если и search , и replace - массивы, то str_ireplace() использует все значения массива search и соответствующие значения массива replace для поиска и замены в subject . Если в массиве replace меньше элементов, чем в search , в качестве строки замены для оставшихся значений будет использована пустая строка. Если search - массив, а replace - строка, то replace будет использована как строка замены для каждого элемента массива search.
*/
echo $user_input_new;
}
?>