<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'lab13-069.mysql.database.azure.com', 'it63070069@lab13-069', 'SMCbvq72', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$Product = $_POST['ชื่อสินค้า'];
$Price = $_POST['ราคาต่อหน่วย'];
$Discount = $_POST['ส่วนลด(%)'];
$Total = $_POST['ราคาหลังลด'];


$sql = "INSERT INTO databook (Product, Price, Discount, Total ) VALUES ('$Product', '$Price', '$Discount', '$Total')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
