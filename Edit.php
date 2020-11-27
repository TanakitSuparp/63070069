<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'lab13-069.mysql.database.azure.com', 'it63070069@lab13-069', 'SMCbvq72', 'table', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$Product = $_POST['product'];
$Price = $_POST['price'];
$Discount = $_POST['discount'];
$Total = $_POST['total'];


$sql = "INSERT INTO databook (Product, Price, Discount, Total ) VALUES ('$product', '$price', '$discount', '$total')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
