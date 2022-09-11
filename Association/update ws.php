
<?php
	include('connect-mysql.php');
	$WS_ID=$_GET['updateid'];
	$query ="select * from workshop where WS_ID=$WS_ID";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_assoc($result);

	
	$WS_NAME=$row['WS_NAME'];
	$PROG_LANG=$row['PROG_LANG'];
	$APPLICATION=$row['APPLICATION'];
	$DATE=$row['DATE'];
	$AVAILABLE=$row['AVAILABLE'];
	$PREREQ=$row['PREREQ'];
	
	if(isset($_POST['update']))	{
		
		$WS_NAME=$_POST['WS_NAME'];
		$PROG_LANG=$_POST['PROG_LANG'];
		$APPLICATION=$_POST['APPLICATION'];
		$DATE=$_POST['DATE'];
		$AVAILABLE=$_POST['AVAILABLE'];
		$PREREQ=$_POST['PREREQ'];
		
		$sql="update workshop set WS_ID='$WS_ID',WS_NAME='$WS_NAME',
		PROG_LANG='$PROG_LANG',APPLICATION='$APPLICATION',
		DATE='$DATE',AVAILABLE='$AVAILABLE',
		PREREQ='$PREREQ' where WS_ID=$WS_ID";
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
	<h1>UPDATE COMPUTING NODES TABLE</h1>
	<form method="POST">
		<!--<input type="text" name="CN_ID" placeholder="Enter the Component ID" valuebr>-->
		Workshop Name:<br><input type="text" name="WS_NAME" value="<?php echo $WS_NAME;?>"     /><br>
		Programming Language:<br><input type="text" name="PROG_LANG" placeholder="PROG_LANG" value="<?php echo $PROG_LANG;?>" /><br>
		APPLICATION:<br><input type="text" name="APPLICATION" placeholder="APPLICATION" value="<?php echo $APPLICATION;?>" /><br>
		DATE:<br><input type="date" name="DATE" placeholder="Enter the DATE" value="<?php echo $DATE;?>" /><br>
		AVAILABLE:<br><input type="text" name="AVAILABLE" placeholder="AVAILABLE TO" value="<?php echo $AVAILABLE;?>" /><br>
		PREREQISITES:<br><input type="text" name="PREREQ" placeholder="Enter the PREREQISITES" value="<?php echo $PREREQ;?>"/><br>
		
		<input type="submit" name="update" value="update"/>
	</form>
	</center>
</body>
</html>
