<?php

 $dbserverName = "localhost"; 
 $dbUsername ="root";
 $dbpassword ="";
 $dbName = "We";

    $conn = mysqli_connect($dbserverName,$dbUsername, $dbpassword,$dbName);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error );
      }
      else{
      //echo "Connected successfully";
      }




?>