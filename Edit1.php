<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'lab13-069.mysql.database.azure.com', 'it63070069@lab13-069', 'SMCbvq72', 'table', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$Price = $_POST['price'];
$Discount = $_POST['discount'];


$sql = 'UPDATE data SET name = "Price = '.$price.'", Discount = "'.$discount.', WHERE ID = '.$id.'';

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
