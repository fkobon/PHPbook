<?php
//50. Какой будет результат выполнения этого скрипта?
function foo() {
static $count = 4;
return ++$count;
}
print foo();
print foo();
print foo();
?>
