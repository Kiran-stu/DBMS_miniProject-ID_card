<?php

$server_name='localhost';
$username='root';
$password='';
$database_name='test';

$con=mysqli_connect($server_name,$username,$password,$database_name);

if(!$con)
{
	die('Connection failed:'. mysqli_connect_error());
}

if(isset($_POST['save']))
{
	$adm_no=$_POST['adm_no'];
	$name=$_POST['name'];
	$father_name=$_POST['father_name'];
	$dob=$_POST['dob'];
	$class=$_POST['class'];
	$sec=$_POST['sec'];
	$rollno=$_POST['rollno'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	
	$sql_query="INSERT INTO school_id VAlUES('$adm_no','$name','$father_name','$dob','$class','$sec','$rollno','$mobile','$address')";
	
	if(mysqli_query($con,$sql_query))
	{
		echo  "Details was insereted sucessfully!!!";
		
	}
	else
	{
		echo 'Error:' .$sql ."" . mysqli_error($con);
	}
	
}

?>