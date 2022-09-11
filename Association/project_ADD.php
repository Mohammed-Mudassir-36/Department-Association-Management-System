 <?php
			include('connect-mysql.php');
			if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    
    $P_NAME=$_POST['P_NAME'];
    $TEAM=$_POST['TEAM'];
    $YEAR=$_POST['YEAR'];
    $APPLICATION=$_POST['APPLICATION'];
	$GUIDE=$_POST['GUIDE'];
     
	
 
// Attempt insert query execution
$sql = "INSERT INTO project(P_NAME,TEAM,YEAR,APPLICATION,GUIDE) VALUES
            ('$P_NAME','$TEAM','$YEAR','$APPLICATION','$GUIDE')";
if(mysqli_query($conn, $sql)){
    echo '<script>alert("Data Inserted successfully")</script>';
	header('refresh:0;url=admin.php');
} else{
    echo '<script>alert("Data Not Inserted")</script>' ;
}
 

mysqli_close($conn);
?>