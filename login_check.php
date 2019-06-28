<?php
session_start();



$con = mysqli_connect("localhost","root","","test");
if(!$con){
	die('Connection Error'.mysqli_error());
}

$email=$_POST['email'];
$password=$_POST['password'];


$query_chk="select * from credentials where username='$email' and password='$password'";
 $exe_chk=mysqli_query($con, $query_chk);

if(mysqli_num_rows($exe_chk) == 1){
	echo "Login Successfull";
}else{
	echo "Login failed";
}

?>
