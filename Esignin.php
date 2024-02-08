 <?php

include 'confi.php';

    //create table through sign in
    if(isset($_POST['submit']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $birthday = $_POST['birthday'];
        $number = $_POST['number'];
        $street = $_POST['street'];
        $town = $_POST['town'];
        $city = $_POST['city'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_pass = $_POST['confirm-password'];

        //sending data to database
        $create = "INSERT INTO employee_table (firstname, lastname, birthday, number, street, town, city, username, password) 
                VALUES ('$firstname', '$lastname', '$birthday', '$number', '$street', '$town', '$city', '$username', '$password')";

        if($password != $confirm_pass) {
            echo "<script>alert('Password does not match. Please check again');</script>";
        }
        elseif($number < 10) {
            echo "<script>alert('Invalid Mobile Number. Please check again');</script>";
        }
        else {
            try {
                mysqli_query($conn, $create);
                echo "<script>alert('Registration Success');</script>";
            } 
            catch (mysqli_sql_exception) {
                echo "<script>alert('Registration Failed');</script>";
            }
        }
        
    }
    mysqli_close($conn);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Phoneix</title>
    <link rel="stylesheet" href="./employee/css/signin.css">
</head>
<body>
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

    <div class="main">
        <!-- title -->
        <h4>Create Brand New Account</h4>

        <form action="signin.php" method="POST">
            <div class="details">
                <!-- first name -->
                <div class="input-box">
                    <span class="user">First Name</span>
                    <input type="text" placeholder="your first name" name="firstname" required>
                </div>

                <!-- last name -->
                <div class="input-box">
                    <span class="user">Last Name</span>
                    <input type="text" placeholder="your last name" name="lastname" required>
                </div>

                <!-- DOB -->
                <div class="input-box">
                    <span class="user">Date of Birth</span>
                    <input type="date" placeholder="dd/mm/yyyy" name="birthday" required>
                </div>

                <!-- mobile number -->
                <div class="input-box">
                    <span class="user">Mobile Phone Number</span>
                    <input type="number" placeholder="Phone Number" name="number" required>
                </div>

                <!-- address -->
                <div class="input-box1">
                    <span class="user1">Home Address</span>
                    <input type="text" placeholder="Street No" name="street" required>
                    <input type="text" placeholder="Town" name="town" required>
                    <input type="text" placeholder="City" name="city" required>
                </div>

                <!-- username -->
                <div class="input-box1">
                    <span class="user1">Username</span>
                    <input type="text" placeholder="Type username" name="username" required>
                </div>

                <!-- new password -->
                <div class="input-box1">
                    <span class="user1">Password</span>
                    <input type="password" placeholder="password" name="password" required>
                </div>

                <!-- confirm password -->
                <div class="input-box1">
                    <span class="user1">Confirm Password</span>
                    <input type="password" placeholder="Confirm password" name="confirm-password" required>
                </div>

                
                <!-- create account button -->
                <input type="submit" name="submit" class="create" value="Create Account">
                
            </div>

        </form>
        
        <!-- login link -->
        <div class="login">
            Already have an account?
            <a href="login.php">Login</a>
        </div>
    </body>
    </html>