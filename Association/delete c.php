
<?php

include('connect-mysql.php');
if(isset($_GET['deleteid'])){
	$C_ID=$_GET['deleteid'];
	$query ="DELETE FROM chapter WHERE C_ID='$C_ID'";
	$result = mysqli_query($conn,$query);
	
	if($result)
		{
			echo '<script type="text/javascript"> alert("Deleted Successfully") </script>';	
		    header('refresh:0;url=admin.php');
		}
		else{
			echo '<script type="text/javascript"> alert("Data  Not Deleted") </script>';
		}

}

?>





















