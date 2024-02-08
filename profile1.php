
<?php
    session_start();
    require_once 'includes/functions.inc.php';
    include 'confi.php';

    
    if (!isset($_SESSION["userid"])) {
        header("Location: safelogin.php");
        exit();
    }

    $userId = $_SESSION["userid"];
    $sql = "SELECT * FROM users WHERE UserID = $userId";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        $name = $row["UserName"];
        $username = $row["Uid"];
        $phoneNo = $row["PhoneNo"];
        $email = $row["Email"];
        $dob = $row["DOB"];
        $adress = $row["Adress"];
        $nic = $row["NIC"];
    } else {
        
        echo "User details not found.";
        exit();
    }



    if (isset($_FILES['profilepic'])) {
        $profilepic = $_FILES['profilepic'];
    
        
        if ($profilepic['error'] === UPLOAD_ERR_OK) {
            
            $tmpFilePath = $profilepic['tmp_name'];
    
            
            $fileData = file_get_contents($tmpFilePath);
    
            
            $stmt = $conn->prepare("UPDATE users SET profilepic = ? WHERE UserID = ?");
            $stmt->bind_param("si", $fileData, $_SESSION['userid']);
            $stmt->execute();
            $stmt->close();
    
            
            header("Location: profile1.php");
            exit();
        }
    }




    if (isset($_POST['delete'])) {
  
        $stmt = $conn->prepare("DELETE FROM users WHERE UserID = ?");
        $stmt->bind_param("i", $_SESSION['userid']);
        $stmt->execute();
        $stmt->close();
        header("location: safelogin.php");

        session_destroy();
        
    }

    
?>

<!DOCTYPE html>
<html>
    <head>

        <title>
        Phoenix Construction
        </title>
        
        <link rel="stylesheet" href="Style/profile-style.css">
        

    </head>
    

    <body>
       
        
<!--/*--------------------------------------------------------------------------------------------------------------------------*/-->

        <div class="profileh">
            
            <div>
                <h1>My Profile</h1>
            </div>



            <br>
                <div class="lable-txt">
                    <ul class="profile">
                        <li><font>Name:</font> <?php echo $name; ?></li>

                        <li><font>ID:</font> <?php echo $userId; ?></li>

                        <li><font>Phone Number:</font> <?php echo $phoneNo; ?></li>

                        <li><font>Email:</font> <?php echo $email; ?></li>

                        <li><font>Date of Birth:</font> <?php echo $dob; ?></li>

                        <li><font>Address:</font> <?php echo $adress; ?></li>

                        <li><font>NIC:</font> <?php echo $nic; ?></li>

                    </ul>
                    
                </div>
            

            <div class="btns">
                <form method="POST" action="profile.php" enctype="multipart/form-data">
                    <div class="propic_sub">
                        <label for="profilepic">Profile Picture:</label>
                        <input type="file" id="profilepic" name="profilepic">
                        <button type="submit" name="submit">Set Profile Pic</button>
                    </div>
                </form>
                <div class="btns2">
                    <br><a href="edit_profile.php"><button name="Submit">Edit Profile </button></a><br><br>
                    <?php
                    echo '<a href = "includes/logout.inc.php"><button  name="logout" >Log Out </button></a>' 
                    ?><br><br><br>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                     <button type="submit" name="delete">Delete Account </button>
                    </form> 
                </div>
               
            </div>
            <br>
        </div>
        
        
        <div class = "img-profile">
            <?php
            
                $stmt = $conn->prepare("SELECT profilepic FROM users WHERE UserID = ?");
                $stmt->bind_param("i", $_SESSION['userid']);
                $stmt->execute();
                $stmt->bind_result($profilepic);
                $stmt->fetch();
                $stmt->close();

                
                if ($profilepic) {
                    echo '<img src="data:image/jpeg;base64,' . base64_encode($profilepic) . '" alt="Profile Picture" width="350px"> ';
                } else {
                    echo '<p>No profile picture available.</p>';
                }
            ?>
        </div>

<!--/*--------------------------------------------------------------------------------------------------------------------------*/-->     

        

        
    </body>
</html>