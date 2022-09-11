<?php 

session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'cse_department');


$name=$_POST['user'];
$pass=$_POST['password'];

$s="select*from usertable where name='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
	echo"Username Already Taken";
}else{
	$reg="insert into usertable(name,password)values('$name','$pass')";
	mysqli_query($con,$reg);
	echo'<script>alert("you have registered successfully, Login to continue")</script>';
	header('refresh:0;url=loginU.php');
	
}

?>