<?php
include 'confi.php';

$firstName =$_POST['firstName'];
$lastname =$_POST['lastname'];
$phone=$_POST['phone'];
$location=$_POST['location'];
$con_type=$_POST['con_type'];
$message=$_POST['message'];
$budget=$_POST['budget'];	
$con_method=$_POST['con_method'];	

$query=  "INSERT INTO constrction(firstName,lastname,phone,	location,con_type,message,budget,con_method,con_ID) VALUES('$firstName','$lastname','$phone','$location','$con_type','$message','$budget','$con_method','')";


if(mysqli_query($conn,$query)===TRUE){

	echo"<script>alert('Success Your Adding Construction Details')</script>";
	header ("location:constructionPage.php");
}

mysqli_close($conn);