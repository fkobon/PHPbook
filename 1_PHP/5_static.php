<?php
class A {
public static $static_item = �hello�;
public static function hello() {
echo �hello_function�;
}
}
echo A::$static_item; // ������� hello, ���� ������� ������ A �� �����������.
A::hello(); // ������� hello_function
?>