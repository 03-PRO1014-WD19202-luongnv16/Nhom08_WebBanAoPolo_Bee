<?php
	class Connection{
		public static function getInstance(){
			//$conn = new PDO("chuoi ket noi csdl",username,password);
			$conn = new PDO("mysql:hostname=localhost;dbname=nhom8_polo","root","");
			$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
			$conn->exec("set names utf8");
			return $conn;
		}
	}
 ?>
