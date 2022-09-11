<?php
			include('connect-mysql.php');
			if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    
    $S_NAME=$_POST['S_NAME'];
    $TIME=$_POST['TIME'];
    $DATE=$_POST['DATE'];
    $IMPORTANCE=$_POST['IMPORTANCE'];
	$PREREQ=$_POST['PREREQ'];
	
       
	
 
// Attempt insert query execution
$sql = "INSERT INTO stream(S_NAME,TIME,DATE,IMPORTANCE,PREREQ) VALUES
            ('$S_NAME','$TIME','$DATE','$IMPORTANCE','$PREREQ')";
if(mysqli_query($conn, $sql)){
   echo '<script>alert("Data Inserted successfully")</script>';
   header('refresh:0;url=admin.php');
} else{
    echo '<script>alert("Data Not Inserted")</script>' ;
}
 

mysqli_close($conn);
?>