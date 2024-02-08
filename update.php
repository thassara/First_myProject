<?php
include 'confi.php';
session_start();

if (isset($_POST['submit'])) {

    if (isset($_POST['firstName'], $_POST['lastName'], $_POST['username'], $_POST['email'], $_POST['phone'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        if (isset($_SESSION['AccountID'])) {
            $accountID = $_SESSION['AccountID'];

    
        $sql = "UPDATE registration SET firstName = '$firstName', lastName = '$lastName', username = '$username', email = '$email', phone = '$phone' WHERE AccountID = '$accountID '";

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
header("location:profile.php");
exit();
?>