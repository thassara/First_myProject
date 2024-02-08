<?php
session_start();

include 'confi.php';

if(isset($_POST['Uname']) && isset($_POST['Password'])){

    function validate($data){
        $data = trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;

    }
    $Uname=validate($_POST['Uname']);
    $Pass=validate($_POST['Password']);

    if(empty($Uname)){
        header("Location: log.php?error=User name is required");
        exit();
    }
    else if(empty($Pass)){
        header("Location:log.php?error=password  is required");
       exit();
    }
    else{
       
        $sql = "SELECT * FROM registration WHERE username='$Uname' AND 	password ='$Pass' ";

        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) === 1){

            $row=mysqli_fetch_assoc($result);
          if($row['username']===$Uname && $row['password']===$Pass){

            $_SESSION['username']=$row['username'];
            $_SESSION['firstName']=$row['firstName'];
            $_SESSION['AccountID']=$row['AccountID'];

            header("location:profile.php");

           
          }else{
            header("location:log.php?error=Incorrect User or password");
            exit();

          }


        }else{
            header("location:log.php?error=Incorrect User or password");
            exit();
        }

    }


}else  {
    header("Location:log.php");
    exit();
}




?>