<?php
class A {
public static $static_item = СhelloТ;
public static function hello() {
echo Сhello_functionТ;
}
}
echo A::$static_item; // выведет hello, хот€ объекты класса A не создавались.
A::hello(); // выведет hello_function
?>