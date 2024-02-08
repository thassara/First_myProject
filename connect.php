<?php
    //connect to database
    $conn = mysqli_connect('localhost', 'root', '', 'phoneix');
    
    //check connection
    if(!$conn) {
        echo "<script>alert('Connection Fail!');</script>";
    }
?>