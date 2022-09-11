
<?php
	include('connect-mysql.php');
	$C_ID=$_GET['updateid'];
	$query ="select * from chapter where C_ID=$C_ID";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_assoc($result);

	
	$C_NAME=$row['C_NAME'];
	$YEAR=$row['YEAR'];
	$ACHIEVEMENTS=$row['ACHIEVEMENTS'];
	$OPERATIONS=$row['OPERATIONS'];

	if(isset($_POST['update']))	{
		
		$C_NAME=$_POST['C_NAME'];
		$YEAR=$_POST['YEAR'];
		$ACHIEVEMENTS=$_POST['ACHIEVEMENTS'];
		$OPERATIONS=$_POST['OPERATIONS'];
		
		
		$sql="update chapter set C_ID='$C_ID',C_NAME='$C_NAME',
		YEAR='$YEAR',ACHIEVEMENTS='$ACHIEVEMENTS',
		OPERATIONS='$OPERATIONS',
		where C_ID=$C_ID";
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
	<h1>UPDATE CHAPTER TABLE</h1>
	<form method="POST">
		
		Chapter Name:<br><input type="text" name="C_NAME" value="<?php echo $C_NAME;?>"     /><br>
		YEAR:<br><input type="text" name="YEAR" placeholder="YEAR" value="<?php echo $YEAR;?>" /><br>
		ACHIEVEMENTS:<br><input type="text" name="ACHIEVEMENTS" placeholder="ACHIEVEMENTS" value="<?php echo $ACHIEVEMENTS;?>" /><br>
		OPERATIONS:<br><input type="text" name="OPERATIONS" placeholder="OPERATIONS" value="<?php echo $OPERATIONS;?>" /><br>

		
		<input type="submit" name="update" value="update"/>
	</form>
	</center>
</body>
</html>
