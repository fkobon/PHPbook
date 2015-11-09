<?php
//5. Напиши на PHP пример реализации паттерна Singleton.
class Database {
	private static $connection;
	private function __construct() {
		echo "Hello from construct!";
	}
	public static function Connect() {
		if (!isset(self::$connection)) {
		self::$connection = new Database;
		}
	return self::$connection;
	}
}
Database::Connect();