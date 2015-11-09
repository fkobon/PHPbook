<?php
//3. Напиши пример реализации полиморфизма.
Class One {
function foo() {
echo "Hello from class One!";
}
function callMe() {
$this->foo();
}
}
Class Two extends One {
function foo() {
echo "Hello from class Two"; //выдаст это, один интерфейс - множество реализаций.
}
}
$Two = new two();
$Two->callMe();
?>