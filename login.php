<?php
    include 'confi.php';

    if(isset($_POST["submit"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        //admin login is hard coded for now
        if($username == 'admin' && $password == 'admin')
        {
            header('location:adminUserDashboard.php');
        }
        else
        {
            echo '<script>alert("You are not an Admin");</script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".employee/css/login.css">

    <!--title-->
    <title>Phoneix</title>
</head>
<body>
    <!--create header-->
    <div class="box">
        <form action="login.php" method="post" class="container">
            <header>Login</header>
            <!--create input boxes-->
            <div class="input-field">
                <input type="text" class="input" placeholder="Username" name="username" required>
            </div>
            <div class="input-field">
                <input type="password" class="input" placeholder="Password" name="password" required>
            </div>

            <!--create login button-->
            <div class="input-field">
                <input type="submit" class="submit" value="Login" name="submit">
            </div>

            <!-- bottom options -->
            <div class="bottom">
                <div class="left">
                    <input type="checkbox"  id="check">
                    <label for="check"> Remember Me</label>
                </div>
                <div class="right">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </form>

        <!-- to create account -->
        <div class="createAcc">
            Don't have an account? 
            <a href="signin.php">Create Account</a>
        </div>
        
    </div>
</body>
</html>