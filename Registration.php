<!DOCTYPE html>
<html >
<head>
    <title>Construction</title>
    
    <link rel="stylesheet" href="./Style/registration.css">
   

</head>
<body class="bb">

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Phoenix</h2>
            </div>

            <div class="menu">
                <ul>
                <li><a href="afhome.php">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="serve 2.html">SERVICE</a></li>
                    <li><a href="pack.html">PACKAGES</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>

       

        </div> 

        <form action="regi.php" method="POST">
            <table class="regi">
                <tr>
                    <td colspan="2"><h2 class="regiclass">Registration</h2></td>
                </tr>
                <tr>
                    <td><label for="firstName"><b>First Name</b></label></td>
                    <td><input type="text" placeholder="Your first name" name="firstName" id="firstName" ></td>
                
                    <td><label for="lastname"><b>Last Name</b></label></td>
                    <td><input type="text" placeholder="Your Last Name" name="lastname" id="lastname" ></td>
                </tr>
                <tr>
                    <td><label for="username"><b>UserName</b></label></td>
                    <td><input type="text" placeholder="User name" name="username" id="username" ></td>
                </tr>
                <tr>
                    <td><label for="houseno"><b>House no.</b></label></td>
                    <td><input type="text" placeholder="House No" name="houseno" id="houseno" ></td>
                
                    <td><label for="street"><b>Street</b></label></td>
                    <td><input type="text" placeholder="Street" name="street" id="street" ></td>
                </tr>
                <tr>
                    <td><label for="city"><b>City</b></label></td>
                    <td><input type="text" placeholder="city" name="city" id="city" ></td>
              
                    <td><label for="postal"><b>Postal Code</b></label></td>
                    <td><input type="text" placeholder="Postal" name="postal" id="postal" ></td>
                </tr>
                <tr>
                    <td><label for="email"><b>Email Address</b></label></td>
                    <td><input type="mail" placeholder="Email" name="email" id="email" ></td>
                
                    <td><label for="phone"><b>Phone Number</b></label></td>
                    <td><input type="tel" placeholder="Phone number" name="phone" id="phone" ></td>
                </tr>
                <tr>
                    <td><label for="password"><b>Password</b></label></td>
                    <td><input type="password" placeholder="Enter Password" name="password" id="password" ></td>
                
                    <td><label for="repassword"><b>Re-Password</b></label></td>
                    <td><input type="password" placeholder="Re Enter Password" name="repassword" id="repassword" ></td>
                </tr>
            </table>
        
            <div class="registerbtn">
                <button type="submit" class="registerbtn">Register</button>
            </div>
        
            <div class="container signin">
                <p>Already have an account? <a href="#">Sign in</a>.</p>
            </div>
        </form>
        
    

        
    

      
        
    
        
    </div>

</body>
 
    
</html>