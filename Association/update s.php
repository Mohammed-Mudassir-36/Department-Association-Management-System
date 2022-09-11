
<?php
	include('connect-mysql.php');
	$S_ID=$_GET['updateid'];
	$query ="select * from stream where S_ID=$S_ID";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_assoc($result);

	
	$S_NAME=$row['S_NAME'];
	$TIME=$row['TIME'];
	$DATE=$row['DATE'];
	$IMPORTANCE=$row['IMPORTANCE'];
	$PREREQ=$row['PREREQ'];
	
	if(isset($_POST['update']))	{
		
		$S_NAME=$_POST['S_NAME'];
		$TIME=$_POST['TIME'];
		$DATE=$_POST['DATE'];
		$IMPORTANCE=$_POST['IMPORTANCE'];
		$PREREQ=$_POST['PREREQ'];
		
		$sql="update stream set S_ID='$S_ID',S_NAME='$S_NAME',
		TIME='$TIME',DATE='$DATE',
		IMPORTANCE='$IMPORTANCE',
		PREREQ='$PREREQ' where S_ID=$S_ID";
		$result=mysqli_query($conn,$sql);
		if($result)
		{
			echo '<script type="text/javascript"> alert("Updated Successfully") </script>';
		    header('refresh:0;url=admin.php');
		}
		else{
			echo '<script type="text/javascript"> alert("Data  Not Updated") </script>';
		}
	}


?>
<html>
<head>
<title>Update</title>
<style>
	body{
		background-color: C87E9A;
	}
	input{
		width: 40%;
		height:5%;
		border: 1px;
		border-radius:05px;
		padding: 8px 15px 8px 15px;
		margin: 10px 0px 15px 0px;
		box-shadow: 1px 1px 2px 1px grey;
	}
</style>
</head>
<body>
	<center>
	<h1>UPDATE STREAM</h1>
	<form method="POST">
		<!--<input type="text" name="CN_ID" placeholder="Enter the Component ID" valuebr>-->
		STREAM NAME:<br><input type="text" name="S_NAME" value="<?php echo $S_NAME;?>"     /><br>
		TIME:<br><input type="time" name="TIME" placeholder="Enter the time of stream" value="<?php echo $TIME;?>" /><br>
		DATE:<br><input type="date" name="DATE" placeholder="Enter the Date of Stream" value="<?php echo $DATE;?>" /><br>
		IMPORTANCE:<br><input type="text" name="IMPORTANCE" placeholder="IMPORTANCE" value="<?php echo $IMPORTANCE;?>" /><br>
		PREREQ:<br><input type="text" name="PREREQ" placeholder="PREREQUISITES" value="<?php echo $PREREQ;?>"/><br>
		
		<input type="submit" name="update" value="update"/>
	</form>
	</center>
</body>
</html>







































