<?php
    session_start();
    include 'confi.php';
    
    if(isset($_SESSION['admin_id'])){
        $readData = "SELECT * FROM admin WHERE ID = '$_SESSION[admin_id]' ";
        $result = mysqli_query($conn, $readData);
        $data = mysqli_fetch_assoc($result);
    }

    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $updateData = "UPDATE admin SET Name = '$name', Email = '$email', Username = '$username', Password = '$password' WHERE ID = '$_SESSION[admin_id]'";
        mysqli_query($conn, $updateData);
        header("Location: adminDashboard.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editAdmin.css">
    <title>Admin Edit</title>
</head>
<body>

    <form action="editAdmin.php" method="post">
        <div class="formDetails">
            <label for="">Admin ID</label>
            <input type="text" value='<?php echo $data["ID"]; ?>' disabled>
        </div>
        <div class="formDetails">
            <label for="">Name</label>
            <input type="text" value=<?php echo $data["Name"]; ?> name="name">
        </div>
        <div class="formDetails">
            <label for="">Email</label>
            <input type="text" value=<?php echo $data["Email"]; ?> name="email">
        </div>
        <div class="formDetails">
            <label for="">Username</label>
            <input type="text" value=<?php echo $data["Username"]; ?> name="username">
        </div>
        <div class="formDetails">
            <label for="">Password</label>
            <input type="text" value=<?php echo $data["Password"]; ?> name="password">
        </div>
        <div class="formDetails">
            <button type="submit" name="update">Update</button>
        </div>
    </form>
    
</body>
</html>