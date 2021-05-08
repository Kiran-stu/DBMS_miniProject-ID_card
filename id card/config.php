<?php
	$server='localhost';
	$user='root';
	$pass='';
	$db_name='test';

	$conn=mysqli_connect($server,$user,$pass,$db_name);
	error_reporting(E_ALL ^ E_WARNING); 
?>