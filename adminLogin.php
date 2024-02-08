<?php
    session_start();
    include 'confi.php';

    $readData = "SELECT * FROM admin";
    $result = mysqli_query($conn, $readData);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if(isset($_POST['submit'])){
        $username = $_POST['uname'];
        $password = $_POST['psw'];

        foreach($data as $row){
            if($username == $row['Username'] && $password == $row['Password']){
                $_SESSION['admin_id'] = $row['ID'];
                header("Location: adminDashboard.php");
            }
            else{
                echo "<script>alert('Invalid username or password');</script>";
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="Style/adminLogin.css">
</head>
<body>

    <div class="container">
        <h2>Admin Login Form</h2>
        <form action="adminLogin.php" method="post">

            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" name="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </form>
    </div>

</body>
</html>
