<html>
<head>
<title>College ID | Generator</title>
</head>
<body>
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
		$usn=$_POST['usn'];
		$name=$_POST['name'];
		$dob=$_POST['dob'];
		$sem_sec=$_POST['sem_sec'];
		$department=$_POST['department'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$Blood_group=$_POST['Blood_group'];
		$address=$_POST['address'];
	
		$sql_query="INSERT INTO college_id VAlUES('$usn','$name','$dob','$sem_sec','$department','$mobile','$email','$Blood_group','$address')";
			
		if(mysqli_query($con,$sql_query))
		{
			echo  "Details was insereted sucessfully!!!";
		}
		else
		{
			echo 'Error:' .$sql ."" . mysqli_error($con);
		}
		mysqli_close($con);
	}
    ?>
	
	

</body>
</html>