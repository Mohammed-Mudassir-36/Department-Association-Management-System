<?php 

session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'cse_department');


$name=$_POST['user'];
$emailid=$_POST['emailid'];
$pass=$_POST['password'];


$s="select*from admintable where name='$name' && emailid='$emailid' && password='$pass'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
	header('location:admin.php');
}else{
	header('location:loginA.php');
}

?>