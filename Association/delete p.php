
<?php

include('connect-mysql.php');
if(isset($_GET['deleteid'])){
	$P_ID=$_GET['deleteid'];
	$query ="DELETE FROM project WHERE P_ID='$P_ID'";
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


