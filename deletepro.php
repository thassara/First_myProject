<?php
session_start();
include 'confi.php';
$accountID = $_SESSION['AccountID'];

$sql = "DELETE FROM registration WHERE AccountID= '$accountID'"; 

if (mysqli_query($conn, $sql)) {
    echo "Your account has been successfully deleted";
} else {
    echo "Error deleting your account: " . mysqli_error($conn);
}

header('Location:./afhome.php');
mysqli_close($conn);
?>
