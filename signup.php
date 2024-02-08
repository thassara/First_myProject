
<!DOCTYPE html>
<html>
    <head>

        <title>
        Phoenix Construction!
        </title>
        <link rel="stylesheet" href="./Style/signup-style.css">
        
    </head>
    

    <body>
       
        
<!--/*--------------------------------------------------------------------------------------------------------------------------*/-->

        <div class="register">

            <div class="reg-container">

                <form action="includes/signup.inc.php" method="post">
                    <h1>Sign Up</h1>
                    <div class="content">
                        <div class="input-box">
                            <label for="fname">Name</label>
                            <input type="text" placeholder="Enter Name" name="name" required>
                        </div>
                        <div class="input-box">
                            <label for="lname">User Name</label>
                            <input type="text" placeholder="Enter User name" name="uid" required>
                        </div>
                        
                        <div class="gender-category">
                            <label for="">Gender</label><br>
                            <input type="radio" name="gender" id="male" value="male">
                            <label for="gender">Male</label><br>
                            <input type="radio" name="gender" id="female" value="female">
                            <label for="gender">Female</label>
                        </div>

                        <div class="dob">
                            <label for="">Date of Birth</label>
                            <input type="date" placeholder="Date of Bitrh" name="dob" class="dob">
                        </div>


                        <div class="input-box">
                            <label for="address">Permenet Address</label>
                            <input type="text" placeholder="Enter Address" name="address" required>
                        </div>

                        <div class="input-box">
                            <label for="phonenumber">Phone Number</label>
                            <input type="tel" placeholder="Enter Phone Number" name="phonenumber" required>
                        </div>
                        <div class="input-box">
                            <label for="email">Email</label>
                            <input type="email" placeholder="Enter Email" name="email" >
                        </div>
                        <div class="input-box">
                            <label for="nic">NIC</label>
                            <input type="text" placeholder="Enter NIC No" name="nic" >
                        </div>
                        
                        <div class="input-box">
                            <label for="password">Password</label>
                            <input type="password" placeholder="Enter password" name="pwd" >
                        </div>
                        <div class="input-box">
                            <label for="cpassword">Confirm Password</label>
                            <input type="password" placeholder="Confirm Password" name="pwdrepeat" >
                        </div>
                    </div>
                    <div class="allert">
                        <p>By clicking Sign Up, you agree to our <a href="#">Terms,</a><a href="#">Privacy Policy</a> and <a href="#">Cookies Policy.</a>You may recive SMS notification from us and can opt out at any time.</p>
                    </div>
                    <div class="buttn-container">
                        <button type="submit" name="submit">Register</button><br>

                        <?php
                        if(isset($_GET["error"])){

                            if($_GET["error"] == "emptyinput"){
                                echo'<div class="error">
                                <img src="img/error.png" alt="" width="50px" height="50px"> <br>Fill in the all fields!
                                </div>';

                            }elseif ($_GET["error"] == "invaliduid"){
                                echo'<div class="error">
                                <img src="img/error.png" alt="" width="50px" height="50px"> <br>Invalid username!
                                </div>';

                            }elseif ($_GET["error"] == "invalidemail"){
                                echo'<div class="error">
                                <img src="img/error.png" alt="" width="50px" height="50px"> <br>Invalid Email!
                                </div>';

                            }elseif ($_GET["error"] == "passwordnotmatch"){
                                echo'<div class="error">
                                <img src="img/error.png" alt="" width="50px" height="50px"> <br>Password not matching!
                                </div>';

                            }elseif ($_GET["error"] == "usernametaken"){
                                echo'<div class="error">
                                <img src="img/error.png" alt="" width="50px" height="50px"> <br>Email already in Use!
                                </div>';
                            }elseif ($_GET["error"] == "stmtfaild"){
                                echo'<div class="error">
                                <img src="img/error.png" alt="" width="50px" height="50px"> <br>Somethig wants Wrong!
                                </div>';
                            }
                        }    
                        ?>
                    </div>
                    <div class="login">
                        <p>Already have an account ?<a href="safelogin.php">Log in</a></p>
                    </div>
                    
                </form>
            </div>
            <img src="./Image/pngwing.com (6).png " alt="" width="550px" height="auto" class="reg-img">
        </div>

<!--/*--------------------------------------------------------------------------------------------------------------------------*/-->     

 

        
    </body>
</html>