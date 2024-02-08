<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./Style/login.css">
</head>
<body>
    <h1>Login </h1><br>
    <div class="login">
    <form id="login" action="loginn.php" method="post" >

        <?php if(isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error'];?></p>
             
          <?php  } ?>

        <label><b>User Name </b> </label>
        <input type="text" name="Uname" id="Uname" placeholder="Username">
        <br><br>
        <label><b>Password</b></label>
        <input type="Password" name="Password" id="Pass" placeholder="Password"><br>
        <br> <a href="#">Forgot Password ?</a><br><br>
        <input type="submit" name="log" id="log" value="Log In Here">
        <br>
        <h4>Don't have an account</h4>
        <a class="sign" href="Registration.php">Sign In</a>

        <br><br>
       
    </form>
</div>
</body>
</html>