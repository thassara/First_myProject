<?php 

include 'confi.php';

     if(isset($_POST['btn']))
     {
         $name = $_POST['name'];
         $email = $_POST['email'];
         $subject = $_POST['Subject'];
         $message = $_POST['message'];

 
         //sending data to database
         $create = "INSERT INTO contact (Name, Email, Subject, Description) 
                 VALUES ('$name', '$email', '$subject', '$message')";
 

        try {
            mysqli_query($conn, $create);
            echo "<script>alert('Registration Success');</script>";
        } 
        catch (mysqli_sql_exception $e) {
            echo "<script>alert('Registration Failed');</script>";
            echo $e;
        }
         
     }
     mysqli_close($conn);
     
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/contactus.css">
    <link rel="stylesheet" href="iwt 1/iwt.css">
    <title>Phoneix Construction</title>
</head>
<body>

    <!-- main headding row -->
    <div class="head">
        <!-- heading left -->
        <nav class="navbar">
            <div class="navdiv">
                <div class="logo">
                    <h1 class="header">Phoneix</h1>
                </div>
                <ul>
                    <   <li><a href="afhome.php">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="serve 2.html">SERVICE</a></li>
                    <li><a href="pack.html">PACKAGES</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <button>Login</button>
                </ul>
    
            </div>
        </nav>

        <!-- heading right -->
       <!-- <div class="headingRight">
            <div class="headRightItem">Hotline +94 782612368</div>
        </div>-->
    </div>

    <!-- main body -->
    <div class="body">
        <!-- left side -->
        <div class="bodyLeft">
            <div class="bodyLeftTitle">Submit a message</div>
            <form class="contactForm" action="contact.php" method="POST">
                <label class="contactFormLabel">Name</label><br>
                <input type="text" class="contactFormInput" name="name"><br>

                <label class="contactFormLabel">Email</label><br>
                <input type="text" class="contactFormInput"name="email"><br>

                <label class="contactFormLabel">Subject</label><br>
                <input type="text" class="contactFormInput"name="Subject"><br>

                <label class="contactFormLabel">Message</label><br>
                <textarea class="contactFormInput" id="" cols="40" rows="10"name="message"></textarea>

                <button class="contactFormSubmitButton" onclick=""name="btn">Send Message</button>
            </form>
        </div>

        <!-- right side -->
        <div class="bodyRight">
            <div class="bodyRightTitle">Contact us</div>
            <div class="bodyRightPara">We are open for any suggestions or just to have a chat</div>
            
            <!-- address/phone/email/website -->
            <div class="bodyRightDetails">
                <div class="item">
                    <img src="images\location.png" class="icon" alt="">
                    <span class="title">Address : </span>
                    <span class="details">Phoneix Construction, Malabe</span>
                </div>
                <div class="item">
                    <img src="images\phone.png" class="icon" alt="">
                    <span class="title">Phone : </span>
                    <span class="details">+94 782396510</span>
                </div>
                <div class="item">
                    <img src="images\email.png" class="icon" alt="">
                    <span class="title">Email : </span>
                    <span class="details">phoneixconstruction@gmail.com</span>
                </div>
                <div class="item">
                    <img src="images\web.png" class="icon" alt="">
                    <span class="title">Web : </span>
                    <span class="details">www.Phoneixconstruction.com</span>
                </div>
            </div>
        </div>
    </div>

    <!-- main footer -->
    <div class="dis">
        <footer class="foot">
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
    </div>
    
</body>
</html>