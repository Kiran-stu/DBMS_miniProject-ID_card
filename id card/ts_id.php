<html>
<body>
<style>
#card{
	   float:left;
	   width:360px;
	   height:230px;
	   margin:5px;
	   border:1px solid black;
	   background-image: url("images/id_1.jpg");
	   background-repeat: no-repeat;
	   background-size: 360px 230px;
	   -webkit-print-color-adjust: exact;
    }
	
	
</style>	
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
	
	if(isset($_POST['checked']))
	{
		$check=$_POST['check'];
		
	
	   $i=$check;
       $get_details="SELECT * FROM `teaching_staff` WHERE `staff_id` = $i";
		
	   $run=mysqli_query($con, $get_details);
	
		
	   while($row=mysqli_fetch_array($run)){
			$staff_id = $row['staff_id'];
			$name = $row['name'];
			$dob = $row['dob'];
			$department=$row['department'];
			$address=$row['address'];
		
		}
	}
	else
	{
		echo 'Error:' .$sql ."" . mysqli_error($con);
	}
	error_reporting(E_ALL ^ E_WARNING); 
?>	


<table id="card"><center>
<b style="position:fixed;left:250px;top:40px;color:white;"><u>Staff ID CARD</u></b>
<tr><td style="position:fixed;top:80px;left:50px;">Staff id:</td><td style="position:fixed;top:80px;left:150px;"><?php echo $staff_id; ?></td></tr>
<tr><td style="position:fixed;top:105px;left:50px;">Name:</td><td style="position:fixed;top:105px;left:150px;"><?php echo $name; ?></td></tr>
<tr><td style="position:fixed;top:130px;left:50px;">DOB:</td><td style="position:fixed;top:130px;left:150px;"><?php echo $dob; ?></td></tr>
<tr><td style="position:fixed;top:155px;left:50px;">Department:</td><td style="position:fixed;top:155px;left:150px;"><?php echo $department; ?></td></tr>
<tr><td style="position:fixed;top:180px;left:50px;">Address:</td><td style="position:fixed;top:180px;left:150px;"><?php echo $address; ?></td></tr>
</center></table>
</body>
</html>