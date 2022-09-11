 <?php
			include('connect-mysql.php');
			if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    
    $WS_NAME=$_POST['WS_NAME'];
    $PROG_LANG=$_POST['PROG_LANG'];
	$APPLICATION=$_POST['APPLICATION'];
	$DATE=$_POST['DATE'];
    $AVAILABLE=$_POST['AVAILABLE'];
	$PREREQ=$_POST['PREREQ'];
       
	
 
// Attempt insert query execution
$sql = "INSERT INTO workshop(WS_NAME,PROG_LANG,APPLICATION,DATE,AVAILABLE,PREREQ) VALUES
            ('$WS_NAME','$PROG_LANG','$APPLICATION','$DATE','$AVAILABLE','$PREREQ')";
if(mysqli_query($conn, $sql)){
    echo '<script>alert("Data Inserted successfully")</script>';
	header('refresh:0;url=admin.php');
} else{
    echo '<script>alert("Data Not Inserted")</script>' ;
}
 

mysqli_close($conn);
?>