<?php


include 'confi.php';


$sql= "SELECT ITEM_ID,ITEM_NAME,ITEM_QTY,ITEM_PRICE FROM ca ";


$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>item page</title>
	<link rel="stylesheet" href="./Style/style1.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<body background="./newiwt/construction.jpg">

</body>
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
                <a href="#"> <button class="btn">LogOut</button></a>
        </div>
        <br></br> 
     
	<h1>ITEM LIST</h1>
	<table class="table table-hover table-bordered table-striped">
		<thead>
			<tr>
				<th>ITEM_ID</th>
				<th>ITEM_NAME</th>
				<th>ITEM_QUANTITY</th>
				<th>ITEM_PRICE</th>
                <th>UPDATE</th>
                <th>DELETE</th>
			</tr>
		</thead>
		<tbody>
		
			
      <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['ITEM_ID'] . '</td>';
                echo '<td>' . $row['ITEM_NAME'] . '</td>';
                echo '<td>' . $row['ITEM_QTY'] . '</td>';
                echo '<td>' . $row['ITEM_PRICE'] . '</td>';
                echo '<td><a href="./suupdate.php" id=' . $row['ITEM_ID'] . '">Update</a></td>';
                echo '<td><a href="delete.php id=' . $row['ITEM_ID'] . '">Delete</a></td>';
                
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="4">No items found</td></tr>';
        }



        
        ?>
            
            
            
				
		</tbody>
	</table>
	</div>
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
