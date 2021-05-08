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
		$staff_id=$_POST['staff_id'];
		$name=$_POST['name'];
		$dob=$_POST['dob'];
		$department=$_POST['departmnet'];
		$address=$_POST['address'];
	
		$sql_query="INSERT INTO teaching_staff VAlUES('$staff_id','$name','$dob','$department','$address')";
			
		if(mysqli_query($con,$sql_query))
		{
			echo  "Your ID is ready";
		}
		else
		{
			echo"<script>alert('PLS ENTER VALID DETAILS')</script>";
		}
		
	}
	
?>

