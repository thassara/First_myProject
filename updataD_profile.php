
<!DOCTYPE html>
<html >
<head>
    
    <title>Construction</title>
    <link rel="stylesheet" href="./Style/iwt.css">
    <link rel="stylesheet" href="./Style/lk1.css">
    <script src="./javascript/final.js"></script>
    <script src="./javascript/delete.js"></script>

</head>
<body class="bb" >

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

            <div class="">
                
                <a href="logout.php"> <button class="btn">Log Out</button></a>
            </div>

        </div> 

        <div class="sidenav">
            <div class="profile">
                <img src="./Image/pic.jpg" alt="" width="100" height="100">
    
                
                
            </div>
    
            <div class="sidenav-url">
                <div class="url">
                    <a href="profile.php" >Profile </a>
                    <hr align="center">
                </div>
                <div class="url">
                    <a href="updataD_profile.php" class="active">Edit Profile</a>
                    <hr align="center">
                </div>
                <div class="url">
                   <a  onclick="deleteProfile()">Delete Profile</a>
                     <hr align="center">
                        </div>
            </div>
        </div>
      
        <div class="main">
            <h2 class="heading">Profile Info</h2>
            <div class="card">
                <div class="card-body">
                    <i class="fa fa-pen fa-xs edit"></i>
                    <table>
                    <form action="update.php" method="POST" onsubmit="return validateForm()" name="upform">
                        <tbody>
                            <tr>
                                <td>User Name</td>
                                <td>:</td>
                                <td> <input type="text" placeholder=" username" name="username" id="username"  ></td>
                            </tr>
                            <tr>
                                <td> First Name</td>
                                <td>:</td>
                                <td> <input type="text" placeholder=" firstName" name="firstName" id="firstName"  ></td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td>:</td>
                                <td><input type="text" placeholder=" lastName" name="lastName" id="lastName"  ></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><input type="text" placeholder=" Email" name="email" id="email"  ></td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td>:</td>
                                <td><input type="text" placeholder=" phone" name="phone" id="phone"  ></td>
                            </tr>
                            
                        </tbody>
                    </table>
                    
                    <div class="update">
                <button type="submit"  name="submit">Updates</button>
            </div>
                    
</form>
                </div>
            </div>
    
            </div>
        </div>
        
    </div>

</body>
</html>