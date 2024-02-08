<?php
    include 'confi.php';
    
    //read data from database
    $readEmp = "SELECT * FROM employee_table";
    $empArray = mysqli_query($conn, $readEmp); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/adminUserDashboard.css">
    <title>Constructer dashboard</title>
</head>
<body>

    <!-- Navigation bar -->
    <nav class="navbar">
            <div class="navdiv">
                <div class="logo">
                    <h1 class="header">Phoneix</h1>
                </div>
                <ul>
                <li><a href="afhome.php">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="serve 2.html">SERVICE</a></li>
                    <li><a href="pack.html">PACKAGES</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <button>Login</button>
                </ul>
    
            </div>
        </nav>

    <!-- search bar -->
    <div class="searchBar">
        <input type="text">
        <button type="submit">Search</button>
    </div>
    <a href="Esignin.php">
                 <button class="btn" >Sign in </button>
                    </a>
    <!-- Body items -->
    <div class="contr">
        <?php
            while($Employee = mysqli_fetch_assoc($empArray)){
            echo '
                <div class="element">
                    <!-- left side contents -->
                    <div class="elementLeft">
                        <span class="elementDetail">Employee ID : '.$Employee["ID"].'</span>
                        <span class="elementDetail">Name : '.$Employee["firstname"].' '.$Employee["lastname"].'</span>
                        <span class="elementDetail">Mobile : '.$Employee["number"].'</span>
                    </div>

                    <!-- right side contents -->
                    <div class="elementRight">
                        <button onclick="location.href=\'editUser.php?editUserId='.$Employee["ID"].'\'" class="elementEdit">Edit</button>
                        <button onclick="location.href=\'deleteUser.php?deleteUserId='.$Employee["ID"].'\'" class="elementDelete">Delete</button>
                    </div>
                </div>
                ';
            }
            ?>
        </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <h1>Contact Us</h1>
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
                    <li><a href="">Packages</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="footer-content">
                <h3>Follow Us</h3>
                <ul class="social-icons">
                    <li><a href=""><i class="fab fa-facebook"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                    <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
            <div class="bottom-bar">
                <p>&copy; 2023 Phoenix company . All rights reserved</p>
            </div>
    </footer>

</body>
</html>