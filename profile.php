<?php
include 'confi.php';

session_start();

isset($_SESSION['password']) && isset($_SESSION['username']);


$accountID = $_SESSION['AccountID'];

$sqlRegestation="SELECT * FROM registration  where AccountID = '$accountID'";

$sqlRegestationResult = $conn->query($sqlRegestation);
$regestationResult=$sqlRegestationResult->fetch_assoc();


$uname=$regestationResult['username'];
$fname=$regestationResult['firstName'];
$lname=$regestationResult['lastName'];
$mail=$regestationResult['email'];
$pnumber=$regestationResult['phone'];
$accountId = $regestationResult['AccountID'];


$_SESSION["AccountID"] = $accountId;



$sqlCons ="SELECT * FROM c_cons  where customer_id = '$accountId'";
$rowResult = $conn ->query($sqlCons);
$row=$rowResult->fetch_assoc();

$category = '';
$con_Sdate = '';
$end_date='';
$infor='';


if(isset($row)){

    $con_Sdate=$row['con_Sdate'];
    $infor=$row['infor'];  
    $end_date=$row['end_date'];
    $category=$row['category'];
}
?>


<!DOCTYPE html>
<html >
<head>
    
    <title>Construction</title>
    <link rel="stylesheet" href="./Style/customer1.css">
    <link rel="stylesheet" href="./Style/lan.css">
    <script src="./javascript/final.js"></script>
    <script src="./javascript/delete.js"></script>
   

</head>
<body class="bb"  >


    <div class="main">
   
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Phoenix</h2>
            </div>
            <div class="menu">
                <ul>
                <li><a href="afhomel.php">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="serve 2.html">SERVICE</a></li>
                    <li><a href="pack.html">PACKAGES</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>

            <div class="">
                
                <a href="afhome.php"> <button class="btn">Log Out</button></a>
            </div>

        </div> 
        <div class="date">
            <h5>Today </h5>
            <h6 id="date"></h6>
        </div>

        <div class="sidenav">
            <div class="profile">
                <img src="./Image/pic.jpg" alt="" width="100" height="100">
    
                <div class="name">
                    <?php echo $fname." ". $lname; ?>
                   
                </div>
                
            </div>
    
            <div class="sidenav-url">
                <div class="url">
                    <a href="#profile" class="active">Profile </a>
                    <hr align="center">
                </div>
                <div class="url">
                    <a href="updataD_profile.php">Edit Profile</a>
                    <hr align="center">
                </div>
                <div class="url">
                   <a  onclick="deleteProfile()">Delete Profile</a>
                     <hr align="center">
                        </div>

                      
            </div>
        </div>
       
   
        
        <div class="main">
            <h2 class="heading">Profile Info</h2>
            <div class="card">
                <div class="card-body">
                    <i class="fa fa-pen fa-xs edit"></i>
                    <table>
                        <tbody>
                            <tr>
                                <td>User Name</td>
                                <td>:</td>
                                <td><?php echo $uname;?></td>
                            </tr>
                            <tr>
                                <td> First Name</td>
                                <td>:</td>
                                <td><?php echo $fname;?></td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td>:</td>
                                <td><?php echo $lname;?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?php echo $mail;?></td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td>:</td>
                                <td><?php echo $pnumber?></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
    
            <h2 class="heading">Construction Details</h2>
            <div class="card">
            <div class="card-body">
                    <i class="fa fa-pen fa-xs edit"></i>
                    <table>
                        <tbody>
                            <tr>
                                <td> Construction Type</td>
                                <td>:</td>
                                <td><?php echo $category; ?></td>
                            </tr>
                            <tr>
                                <td> Start Date</td>
                                <td>:</td>
                                <td><?php echo $con_Sdate; ?></td>
                            </tr>
                            <tr>
                                <td>Current Situation </td>
                                <td>:</td>
                                <td><?php echo $infor; ?></td>
                            </tr>
                            <tr>
                                <td>Ending Date</td>
                                <td>:</td>
                                <td><?php echo $end_date; ?></td>
                            </tr>
                           
                            
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        
    </div>
    
</body>
</html>