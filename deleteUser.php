<?php
  
include 'confi.php';

    if(isset($_GET["deleteUserId"]))
    {
        $Id = $_GET["deleteUserId"];
        $delete = "DELETE FROM employee_table WHERE ID = $Id";

        //execute above query
        $result = mysqli_query($conn, $delete);
    }
    header('location:adminUserDashboard.php');
?>