<?php  
	require_once('Database.php');
	$a = new Database('127.0.0.1','root','123456','my');
	$table = $a->tables();
	var_dump($table);
?>