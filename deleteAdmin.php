<?php
    session_start();
    include 'confi.php';

    if(isset($_SESSION['admin_id'])){
        $deleteData = "DELETE FROM admin WHERE ID = '$_SESSION[admin_id]'";
        $query = mysqli_query($conn, $deleteData);
        
        if($query){
            echo "<script>alert('Account deleted successfully');</script>";
            header("Location: adminLogin.php");
        }
        else{
            echo "<script>alert('Account deletion failed');</script>";
        }
    }
?>