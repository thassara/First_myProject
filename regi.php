<?php
include 'confi.php';

$firstName =$_POST['firstName'];
$lastname =$_POST['lastname'];
$username =$_POST['username'];
$houseno =$_POST['houseno'];
$street =$_POST['street'];
$city = $_POST['city'];
$postal = $_POST['postal'];
$email =$_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$repassword= $_POST['repassword'];



$sql = "INSERT INTO registration(firstName, lastname, username, houseno, street, city, postal, email, phone,password,repassword) VALUES ('$firstName', '$lastname', '$username', '$houseno', '$street', '$city', '$postal', '$email', '$phone', '$password','$repassword')";




if(mysqli_query($conn,$sql)===TRUE){

	echo "<script>alert('added details')</script>";
	header("location:profile.php");
}
else{
	echo"<script>alert('Error in insertion')</script>";
}

header("location:log.php");
mysqli_close($conn);


?>