<?php

  
include 'confi.php';
    // get old values to fields
    if(isset($_GET["editUserId"]))
    {
        $getId = $_GET["editUserId"];
        setcookie('user_id', $getId, time()+(5000*30), '/');

        $read = "SELECT * FROM employee_table WHERE ID = $getId";

        // execute above query
        $query = mysqli_query($conn, $read);

        // fetch data
        $data = mysqli_fetch_assoc($query);
    }

    // update new values to database
    if(isset($_POST["submit"]))
    {
        $Id = $_COOKIE['user_id'];
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


        $update = "UPDATE employee_table SET firstname = '$firstname', lastname = '$lastname', birthday = '$birthday', number = '$number', street = '$street', town = '$town', city = '$city', username = '$username', password = '$password'
                   WHERE ID = $Id";

        if($password != $confirm_pass) {
            echo "<script>alert('Password does not match. Please check again');</script>";
        }
        elseif($number < 10) {
            echo "<script>alert('Invalid Mobile Number. Please check again');</script>";
        }
        else {
            try {
                mysqli_query($conn, $update);
                echo "<script>
                       if(confirm('User Details Updated!')) {
                           location.href = 'adminUserDashboard.php';
                       }
                       </script>";
                // header('location:adminDashboard.php');
                //javascript pop-up
            } catch (mysqli_sql_exception $e) {
                echo "<script>
                      if(confirm('Operation Failed!')) {
                          location.href = 'adminUserDashboard.php';
                      }
                      </script>";
                echo $e;
            }
        }
        
    }
    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".\Style\signin.css">
    <title>Edit Employee</title>
</head>
<body>

    <div class="main">
        <!-- title -->
        <h4>Edit Employer</h4>

        <form action="editUser.php" method="POST">
            <div class="details">
                <!-- first name -->
                <div class="input-box">
                    <span class="user">First Name</span>
                    <input type="text" placeholder="your first name" name="firstname" value = <?php echo $data["firstname"]; ?> required>
                </div>

                <!-- last name -->
                <div class="input-box">
                    <span class="user">Last Name</span>
                    <input type="text" placeholder="your last name" name="lastname" value = <?php echo $data["lastname"]; ?> required>
                </div>

                <!-- DOB -->
                <div class="input-box">
                    <span class="user">Date of Birth</span>
                    <input type="date" placeholder="dd/mm/yyyy" name="birthday" value = <?php echo $data["birthday"]; ?> required>
                </div>

                <!-- mobile number -->
                <div class="input-box">
                    <span class="user">Mobile Phone Number</span>
                    <input type="number" placeholder="Phone Number" name="number" value = <?php echo $data["number"]; ?> required>
                </div>

                <!-- address -->
                <div class="input-box1">
                    <span class="user1">Home Address</span>
                    <input type="text" placeholder="Street No" name="street" value = <?php echo $data["street"]; ?> required>
                    <input type="text" placeholder="Town" name="town" value = <?php echo $data["town"]; ?> required>
                    <input type="text" placeholder="City" name="city" value = <?php echo $data["city"]; ?> required>
                </div>

                <!-- username -->
                <div class="input-box1">
                    <span class="user1">Username</span>
                    <input type="text" placeholder="Type username" name="username" value = <?php echo $data["username"]; ?> required>
                </div>

                <!-- new password -->
                <div class="input-box1">
                    <span class="user1">Password</span>
                    <input type="password" placeholder="password" name="password" value = <?php echo $data["password"]; ?> required>
                </div>

                <!-- confirm password -->
                <div class="input-box1">
                    <span class="user1">Confirm Password</span>
                    <input type="password" placeholder="Confirm password" name="confirm-password" value = <?php echo $data["password"]; ?> required>
                </div>

                
                <!-- create account button -->
                <input type="submit" name="submit" class="create" value="Update">
                
            </div>

        </form>

    </div>

</body>
</html>