<?php
	include('connect-mysql.php');
	$P_ID=$_GET['updateid'];
	$query ="select * from project where P_ID=$P_ID";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_assoc($result);

	
	$P_NAME=$row['P_NAME'];
	$TEAM=$row['TEAM'];
	$YEAR=$row['YEAR'];
	$APPLICATION=$row['APPLICATION'];
	$GUIDE=$row['GUIDE'];
	
	if(isset($_POST['update']))	{
		
		$P_NAME=$_POST['P_NAME'];
		$TEAM=$_POST['TEAM'];
		$YEAR=$_POST['YEAR'];
		$APPLICATION=$_POST['APPLICATION'];
		$GUIDE=$_POST['GUIDE'];
		
		
		$sql="update project set P_ID='$P_ID',P_NAME='$P_NAME',
		TEAM='$TEAM',YEAR='$YEAR',
		APPLICATION='$APPLICATION',GUIDE='$GUIDE',
		where P_ID=$P_ID";
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
	<h1>UPDATE PROJECT TABLE</h1>
	<form method="POST">
		
		Project Name:<br><input type="text" name="P_NAME" value="<?php echo $P_NAME;?>" /><br>
		TEAM:<br><input type="text" name="TEAM" placeholder="TEAM" value="<?php echo $TEAM;?>" /><br>
		YEAR:<br><input type="text" name="YEAR" placeholder="YEAR" value="<?php echo $YEAR;?>" /><br>
		APPLICATION<br><input type="text" name="APPLICATION" placeholder="APPLICATION" value="<?php echo $APPLICATION;?>" /><br>
		GUIDE:<br><input type="text" name="GUIDE" placeholder="GUIDE" value="<?php echo $GUIDE;?>" /><br>
		
		
		<input type="submit" name="update" value="update"/>
	</form>
	</center>
</body>
</html>