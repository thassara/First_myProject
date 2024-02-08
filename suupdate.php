<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $query = "SELECT * FROM ca Where $id='1'";

    $result = mysqli_conn($conn,$query);

    if(!$result){
        die("query failed".mysqli_error());
    }
    else{
        $row = mysqli_fetch_assoc($result);

        print_r($row);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Item</title>
    <link rel="stylesheet" href="./Style/update.css">
    
    
</head>
<body>


    <div class="container">
        <h1>Update Item</h1>
        <form action="update_process.php" method="POST">
            <div class="form-group">
                <label for="item_id">Item ID:</label>
                <input type="text" id="item_id" name="item_id" >
            </div>
            <div class="form-group">
                <label for="item_name">Item Name:</label>
                <input type="text" id="item_name" name="item_name">
            </div>
            <div class="form-group">
                <label for="item_qty">Item Quantity:</label>
                <input type="text" id="item_qty" name="item_qty">
            </div>
            <div class="form-group">
                <label for="item_price">Item Price:</label>
                <input type="text" id="item_price" name="item_price">
            </div>
            <div class="form-group">
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
   
    
</body>
</html>
