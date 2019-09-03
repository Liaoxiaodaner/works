<?php	
	try{
		$dsn = "mysql:host=localhost;dbname=homework";
		$db = new PDO($dsn,"root","");
		$db->query("set names utf8");
	}catch(PDOException $e){
		die("数据库连接失败".$e->getMessage());
	}
?>
