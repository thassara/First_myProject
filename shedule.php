<?php
include 'confi.php';

if (isset($_POST["submit"])) {
   $ITEM_ID = $_POST['ITEM_ID'];
   $ITEM_NAME = $_POST['ITEM_NAME'];
   $ITEM_QTY = $_POST['ITEM_QTY'];
   $ITEM_PRICE = $_POST['ITEM_PRICE'];
  



   $sql = "INSERT INTO ca(`ITEM_ID`, `ITEM_NAME`, `ITEM_QTY`, `ITEM_PRICE`) VALUES (' $ITEM_ID','$ITEM_NAME','  $ITEM_QTY','$ITEM_PRICE ')";
   

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">


   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>ITEM LIST</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      ITEM LIST
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add NEW ITEMS</h3>
         <p class="text-muted">add to new items</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">ITEM_ID :</label>
                  <input type="text" class="form-control" name="ITEM_ID" placeholder="ITEM_ID">
               </div>

               <div class="col">
                  <label class="form-label">ITEM_NAME :</label>
                  <input type="text" class="form-control" name="ITEM_NAME" placeholder="ITEM_NAME">
               </div>
            </div>
            <div class="col">
                  <label class="form-label">ITEM_QTY :</label>
                  <input type="text" class="form-control" name="ITEM_QTY" placeholder="ITEM_QTY">
               </div>

               <div class="col">
                  <label class="form-label">ITEM_QTY :</label>
                  <input type="text" class="form-control" name="ITEM_PRICE" placeholder="ITEM_PRICE">
               </div>
            </div>

         
  
            <div>
               <center>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </center>
            </div>
         </form>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>


