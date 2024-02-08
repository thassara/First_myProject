<?php
include 'conn1.php';
session_start();

if (isset($_POST['submit'])) {

    if (isset($_POST['fullname'], $_POST['address'], $_POST['phone'], $_POST['email'], $_POST['date'],$POST['number'],$POST['edate'],$_POST['cvv'])) {
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $number = $_POST['number'];
        $edate = $_POST['edate'];
        $cvv = $_POST['cvv'];

        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];

    
        $sql = "UPDATE payment SET fullname = '$fullname', address = '$address', phone = '$phone', email = '$email', date = '$date',number='$number',edate ='edate',cvv='$cvv' WHERE id = '$id '";

        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Record updated successfully");</script>';
        } else {
            echo '<script>alert("Invalid User Name and Password");</script>';
        }
    } else {
        echo '<script>alert("Incomplete POST data received");</script>';
    }
}
}

$conn->close();

exit();
?>