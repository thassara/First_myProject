<?php


include 'confi.php';

$username=$_POST['username'];
$password=$_POST['password'];

$sql= "select 	ITEM_ID,ITEM_NAME,ITEM_QTY,	ITEM_PRICE  from ca ";

$result = $conn->query($sql);

if($result->num_rows >0)
{

    $row=$result->fetch_assoc();

    $itemid=$row['Item_ID'];
    $itname=$row['ITEM_NAME'];
    $itqty=$row['ITEM_QTY'];
    $itprice=$row['ITEM_PRICE'];





}







?>