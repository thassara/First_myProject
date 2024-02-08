
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Phoenix Construction</title>
    <link rel="stylesheet" href="./Style/login-style.css">
</head>
<body  >
    

    
    <div class="reg-container">

    <form action="includes/login.inc.php" method="post">
        <h1>Login</h1>
        <div class="content">
            <div class="input-box">
                <label for="fname">User Name </label>
                <input type="text" placeholder="Enter User name or Email" name="uid" required>
            
            <div class="input-box">
                <label for="password">Password</label>
                <input type="password" placeholder="Password" name="pwd" required>
            </div>   
        </div>

        <div class="buttn-container">
            <div class="forgot-password">
                <p><a href="">Forgot your Password ?</a></p>
            </div>
            <button type="submitl" name="submitl">Log In</button><br>

            <?php
                        if(isset($_GET["error"])){

                            if($_GET["error"] == "emptyinput"){
                                echo'<div class="error">
                                <img src="./Image/error.png" alt="" width="50px" height="50px"> <br>Fill in the all fields!
                                </div>';

                            }elseif ($_GET["error"] == "wronglogin"){
                                echo'<div class="error">
                                <img src="./Image/error.png" alt="" width="50px" height="50px"> <br>Invalid Details!
                                </div>';

                            }
                        }    
                        ?>

            <div class="register">
                <p>Haven't an account ?<a href="signup.php">Register</a></p>
            </div>
        </div>
        
        
    </form>
    </div>
    <img src="./Image/pngwing.com (8).png " alt="" width="450px" height="auto" class="logimg">

    

</body>
</html>