<?php
include 'confi.php';
$ITEM_ID = $_GET["ITEM_ID"];

$sql = "DELETE FROM ca WHERE ITEM_ID = '$ITEM_ID'";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: sindex.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}