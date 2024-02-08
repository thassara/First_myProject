<?php
    session_start();
    include 'confi.php';

    $readData = "SELECT * FROM admin WHERE ID = '$_SESSION[admin_id]' ";

    $result = mysqli_query($conn, $readData);
    $data = mysqli_fetch_assoc($result);
    
    if(isset($_POST['edit'])){
        header("Location: editAdmin.php");
    }
    if(isset($_POST['delete'])){
        echo "<script>
                if(confirm('Do you really want to delete your account?')) {
                    location.href = 'deleteAdmin.php';
                } 
                else {
                    location.href = 'adminDashboard.php';
                }
                </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/adminDashboard.css">
    <title>Admin Dashboard</title>
</head>
<body>

    <!-- header -->
    <nav class="navbar">
        <!-- logo -->
        <h1 class="navBarLogo">Phoneix</h1>

        <!-- navigation links -->
        <div class="navBarLink">
            <a href="afhome.php">HOME</a>
            <a href="./about/about.html">ABOUT</a>
            <a href="./service/serve 2.html">SERVICE</a>
            <a href="pack.html">PACKAGES</a>
            <a href="contact.php">CONTACT</a>
        </div>

        <!-- sign in/ login -->
        <div class="navBarBtn">
            <button onclick="">Login</button>
            <button onclick="">Signin</button>
        </div>
    </nav>

    <!-- body -->
    <div class="mainBody">
        <!-- left -->
        <div class="bodyLeft">
            <!-- title -->
            <span class="bodyLeftTitle">Admin Dashboard</span>

            <!-- details panel -->
            <form action="adminDashboard.php" method="post">
                <div class="formDetails">
                    <label for="">Admin ID</label>
                    <input type="text" value='<?php echo $data["ID"]; ?>' disabled>
                </div>
                <div class="formDetails">
                    <label for="">Name</label>
                    <input type="text" value=<?php echo $data["Name"]; ?> disabled>
                </div>
                <div class="formDetails">
                    <label for="">Email</label>
                    <input type="text" value=<?php echo $data["Email"]; ?> disabled>
                </div>
                <div class="formDetails">
                    <button type="submit" name="edit">Edit</button>
                    <button type="submit" name="delete">Delete</button>
                </div>
            </form>
        </div>

        <!-- right -->
        <div class="bodyRight">
            <button onclick="location.href='adminUserDashboard.php';">Employ</button>
            <button onclick="location.href='profile1.php';">Safety</button>
            <button onclick="location.href='#';">Supplier</button>
            <button onclick="location.href='#';">Customer</button>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <h3>Contact Us</h3>
                <p>PhoenixConstruction.com</p>
                <p>Phone:077-0348898</p>
                <p>Address:Phoenix Construction Company</p>
            </div>
            <div class="footer-content">
                <h3>Quick Links</h3>
                <ul class="list">
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="footer-content">
                <h3>Follow Us</h3>
                <ul class="social-icons">
                    <img src="images/facebook.png" alt="">
                    <img src="images/twitter.png" alt="">
                    <img src="images/instagram.png" alt="">
                    <img src="images/linkdin.png" alt="">
                </ul>
            </div>
        </div>
        <div class="bottom-bar">
            <p>&copy; 2023 Phoenix company . All rights reserved</p>
        </div>
    </footer>
    
</body>
</html>