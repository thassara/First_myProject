
<?php
session_start();
include 'confi.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $userid = $_SESSION['userid'];

    $sql = "UPDATE users SET UserName = '$name', Email = '$email', PhoneNo = '$mobile', DOB = '$dob', Adress = '$address'  WHERE UserID = '$userid'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script type="text/javascript">
        window.onload = function () { alert("Account Updated !"); 
            window.location.href = "profile1.php";}
        </script>';
    } else {
        echo "Error updating user details: " . mysqli_error($conn);
    }
}

// Fetch user details from the database
$userid = $_SESSION['userid'];
$sql = "SELECT * FROM users WHERE UserID = '$userid'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html>
    <head>

        <title>
        Phoenix Construction
        </title>
        <link rel="stylesheet" href="styles/iwt.css">
        <link rel="stylesheet" href="Style/editProfile-style.css">
        

    </head>
    

    <body>
       
    
<!--/*--------------------------------------------------------------------------------------------------------------------------*/-->

        <div class="profile">
        <div>
            <h1> Edit Profile</h1>
        </div>


        <form method="post" action="edit_profile.php">
            <br>
            <div class="lable-txt">
                <label for="name">Name:</label><br>
                <input type="text" name="name" value="<?php echo $user['UserName']; ?>"><br><br>
            
                <label for="mobile">Phone Number:</label><br>
                <input type="text" name="mobile" value="<?php echo $user['PhoneNo']; ?>"><br><br>

                <label for="name">Email:</label><br>
                <input type="text" name="email" value="<?php echo $user['Email']; ?>"><br><br>

                <label for="dob">Date of Birth:</label><br>
                <input type="date" name="dob" value="<?php echo $user['DOB']; ?>"><br><br>

                <label for="address">Address:</label><br>
                <input type="text" name="address" value="<?php echo $user['Adress']; ?>"><br><br>

            

                <div class="btns">
                    <button type="submit" name="submit">Update</button>
                    
                </div>
            </div>

            
        </form>
    </div>
        
    <div class = "img-profile">
        <img src="img/jh.png" alt="" width="500px">
            
    </div>
<!--/*--------------------------------------------------------------------------------------------------------------------------*/-->     

        
        
    </body>
</html>