<html>
<body style='background-image:url("idscl.jpg");'>
<style>
#card{
	   float:left;
	   width:260px;
	   height:340px;
	   margin:20px;
	   border:1px solid black;
	   background-image: url("images/id.png");
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
    $get_details="SELECT * FROM `school_id` WHERE `rollno` = '$i'";
	
	if(mysqli_query($con,$get_details))
	{
		$i=$check;
        $get_details="SELECT * FROM `school_id` WHERE `rollno` = '$i'";
	
		$run=mysqli_query($con, $get_details);
		while($row=mysqli_fetch_array($run)){

			
	    $adm_no=$row['adm_no'];
		$name=$row['name'];
		$father_name=$row['father_name'];
		$dob=$row['dob'];
		$class=$row['class'];
		$sec=$row['sec'];
		$rollno=$row['rollno'];
		$mobile=$row['mobile'];
		$address=$row['address'];
        }
		error_reporting(E_ALL ^ E_WARNING); 
    }		
	else
	{
		echo 'Error:' .$sql ."" . mysqli_error($con);
		echo "<script>alert('Please Enter a valid id number 🙄')</script>";
	}	
	error_reporting(E_ALL ^ E_WARNING); 
?>	


<table id="card"><center>
<!--<b style="position:absolute;left:100px;top:60px;color:black;">School id</b>-->
<tr><td style="position:absolute;top:100px;left:50px;">Adm no:</td><td style="position:absolute;top:100px;left:150px;"><?php echo $adm_no; ?></td></tr>
<tr><td style="position:absolute;top:125px;left:50px;">Name:</td><td style="position:absolute;top:125px;left:150px;"><?php echo $name; ?></td></tr>
<tr><td style="position:absolute;top:150px;left:50px;">DOB:</td><td style="position:absolute;top:200px;left:150px;"><?php echo $father_name; ?></td></tr>
<tr><td style="position:absolute;top:175px;left:50px;">Class:</td><td style="position:absolute;top:150px;left:150px;"><?php echo $dob; ?></td></tr>
<tr><td style="position:absolute;top:200px;left:50px;">Father Name:</td><td style="position:absolute;top:175px;left:150px;"><?php echo $class; ?></td></tr>
<tr><td style="position:absolute;top:225px;left:50px;">Sec:</td><td style="position:absolute;top:225px;left:150px;"><?php echo $sec; ?></td></tr>
<tr><td style="position:absolute;top:250px;left:50px;">Roll no:</td><td style="position:absolute;top:250px;left:150px;"><?php echo $rollno; ?></td></tr>
<tr><td style="position:absolute;top:275px;left:50px;">Mobile:</td><td style="position:absolute;top:275px;left:150px;"><?php echo $mobile; ?></td></tr>
<tr><td style="position:absolute;top:300px;left:50px;">District:</td><td style="position:absolute;top:300px;left:150px;"><?php echo $address; ?></td></tr>
</center>
</table>
</body>
</html>