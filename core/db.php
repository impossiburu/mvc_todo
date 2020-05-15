<?php

class db {

  public static $host = 'your_host';
	public static $user = 'your_user';
	public static $password = 'your_password';
	public static $dbname = 'your_db_name';  

	private static function connect() {

		$pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname.";charset=utf8", self::$user, self::$password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}

	public static function query($query, $params = array()) {
		$statement = self::connect()->prepare($query);
		$statement->execute($params);

		if (explode(' ', $query)[0] == 'SELECT') {
		$data = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $data;
		}
	}
}
