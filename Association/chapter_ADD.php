 <?php
			include('connect-mysql.php');
			if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    
    $C_NAME=$_POST['C_NAME'];
    $YEAR=$_POST['YEAR'];
    $ACHIEVEMENTS=$_POST['ACHIEVEMENTS'];
    $OPERATIONS=$_POST['OPERATIONS'];
	
 
// Attempt insert query execution
$sql = "INSERT INTO chapter(C_NAME,YEAR,ACHIEVEMENTS,OPERATIONS) VALUES
            ('$C_NAME','$YEAR','$ACHIEVEMENTS','$OPERATIONS')";
if(mysqli_query($conn, $sql)){
    echo '<script>alert("Data Inserted successfully")</script>';
	header('refresh:0;url=admin.php');
} else{
    echo '<script>alert("Data Not Inserted")</script>' ;
}
 

mysqli_close($conn);
?>