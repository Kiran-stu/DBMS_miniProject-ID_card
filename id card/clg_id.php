<html>
<body>	
<style>
#card{
	   float:left;
	   width:260px;
	   height:340px;
	   margin:20px;
	   border:1px solid black;
	   background-image: url("images/id2.png");
	   background-repeat: no-repeat;
	   background-size: 260px 340px;
	   -webkit-print-color-adjust: exact;
	   box-shadow: 0px 1px 10px;
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
		
	}
	$i=$check;
    $get_details="SELECT * FROM `college_id` WHERE `mobile` = $i";
	
	if(mysqli_query($con,$get_details))
	{
		$i=$check;
        $get_details="SELECT * FROM `college_id` WHERE `mobile` = $i";
	
		$run=mysqli_query($con, $get_details);
		while($row=mysqli_fetch_array($run)){

			
	    $usn=$row['usn'];
		$name=$row['name'];
		$dob=$row['dob'];
		$sem_sec=$row['sem_sec'];
		$department=$row['department'];
		$mobile=$row['mobile'];
		$email=$row['email'];
		$Blood_group=$row['Blood_group'];
		$address=$row['address'];
		}		
	error_reporting(E_ALL ^ E_WARNING); 	
	}
	else
	{
		echo 'Error:' .$get_details."" . mysqli_error($con);
	}
	
		
	error_reporting(E_ALL ^ E_WARNING); 
?>	


<table id="card">
<tr><td style="position:absolute;top:100px;left:50px;">USN:</td><td style="position:absolute;top:100px;left:150px;"><?php echo $usn; ?></td></tr>
<tr><td style="position:absolute;top:125px;left:50px;">Name:</td><td style="position:absolute;top:125px;left:150px;"><?php echo $name; ?></td></tr>
<tr><td style="position:absolute;top:150px;left:50px;">sem&sec:</td><td style="position:absolute;top:200px;left:150px;"><?php echo $dob; ?></td></tr>
<tr><td style="position:absolute;top:175px;left:50px;">Branch:</td><td style="position:absolute;top:150px;left:150px;"><?php echo $sem_sec; ?></td></tr>
<tr><td style="position:absolute;top:200px;left:50px;">DOB:</td><td style="position:absolute;top:175px;left:150px;"><?php echo $department; ?></td></tr>
<tr><td style="position:absolute;top:225px;left:50px;">Mobile:</td><td style="position:absolute;top:225px;left:150px;"><?php echo $mobile; ?></td></tr>
<tr><td style="position:absolute;top:250px;left:50px;">email:</td><td style="position:absolute;top:250px;left:150px;"><?php echo $email; ?></td></tr>
<tr><td style="position:absolute;top:275px;left:50px;">Blood group:</td><td style="position:absolute;top:275px;left:150px;"><?php echo $Blood_group; ?></td></tr>
<tr><td style="position:absolute;top:300px;left:50px;">District:</td><td style="position:absolute;top:300px;left:150px;"><?php echo $address; ?></td></tr>

</table>
</body>
</html>