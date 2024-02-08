<!DOCTYPE html>
<html >
<head>
    <title>Construction</title>
    
 <link rel="stylesheet" href="./Style/constructionPage.css">
   

</head>


<body class="bb">

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

    
        <form class="Cform"  action="conPage.php" method="POST">
            <div class="form-header">
                <h1>Add the Constructor</h1>
            </div>
            <div class="form-body">
                <div class="row">
                    <div class="input-group">
                        <label>First name </label>
                        <input type="text" class="firstName" placholder="Enter your first name" id="firstName"name="firstName"  >
                    </div>
                    <div class="input-group">
                        <label>Last name</label>
                        <input type="text"  class ="lastname "  placholder="Enter your last name" id="lastname" name="lastname"  >
                    </div>
                </div>
                <!-- Email -->
                <div class="row">
                    <div class="input-group">
                        <label>Phone Number </label>
                        <input type="text"  class="phone" placholder="Enter your number" id="phone" name="phone">
                    </div>
                </div>
                <div class="row">
                    <div class="input-group">
                        <label>Construction Location </label>
                        <input class= location type="text" placholder="Enter Location" id="location" name="location">
                    </div>
                  
                </div>
                <!-- Gender & Hobbies -->
                <div class="row">
                    <div class="input-group">
                        <label>Construction Method </label>

                        <div class="radio-group">

                            <div>
                                <label for="planing">
                                    <input type="radio" name="con_method" id="planing" value="planing">
                                    Planing
                                </label>
                            </div>

                            <div>
                                <label for="Designing">
                                    <input type="radio" name="con_method" id="Designing" value="Designing">
                                    Designing
                                </label>
                            </div>

                            <div>
                                <label for="Build">
                                    <input type="radio" name="con_method" id="Build" value="Build"> Build
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="input-group">
                        <label>Construction Type</label>
                        <div class="checkbox-group">
                            <div>
                                <label for="House">
                                    <input type="radio" name="con_type"id="house" value="House">
                                    House
                                </label>
                            </div>

                            <div>
                                <label for="Building">
                                    <input type="radio" name="con_type" id="building" value="Building">
                                    Building
                                </label>
                            </div>

                            <div>
                                <label for="Bridge">
                                    <input type="radio" name="con_type" id="bridge" value="Bridge">
                                    Bridge
                                </label>
                            </div>

                            <div>
                                <label for="Other">
                                    <input type="radio" name="con_type" id="other" value="Other">
                                    Other
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Source of Income & Income -->
                <div class="row">
                    <div class="input-group">
                        <label for="">Your Budget</label>
                        <input type="text" placholder="Enter your budget" class="budget" id="budget" name="budget">
                    </div>
                  
                </div>
                
                <div class="row">
                    <div class="input-group">
                        <label for="">Add the other details</label>
                        <textarea  name="message" id="message"> </textarea>
                    </div>
                </div>
            </div>
            <!--  FORM FOOTER   -->
            <div class="form-footer">
                <button  type="submit" class="btn" name="submit">Submit</button>
            </div>
        </form>
    

</body>
 
    
</html>