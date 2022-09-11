<?php 

session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'cse_department');


$name=$_POST['user'];
$emailid=$_POST['emailid'];
$pass=$_POST['password'];

$s="select*from admintable where name='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
	echo"Username Already Taken";
}else{
	$reg="insert into admintable(name,emailid,password)values('$name','$emailid','$pass')";
	mysqli_query($con,$reg);
	echo'<script>alert("you have registered successfully, Login to continue")</script>';
	header('refresh:0;url=loginA.php');
	
}

?>