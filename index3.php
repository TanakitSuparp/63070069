<html>
<head>
<title></title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab13-069.mysql.database.azure.com', 'it63070069@lab13-069', 'SMCbvq72', 'table', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM databook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">Product</div></th>
    <th width="350"> <div align="center">Price </div></th>
    <th width="350"> <div align="center">Discount </div></th>
    <th width="350"> <div align="center">Total </div></th>
    <th width="350"> <div align="center">การจัดการ </div></th>


  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['ชื่อสินค้า'];?></div></td>
    <td><?php echo $Result['ราคาต่อหน่วย'];?></td>
    <td><?php echo $Result['ส่วนลด(%)'];?></td>
    <td><?php echo $Result['ราคาหลังลด'];?></td>
    <a href="form.html">
  <button type="submit" class="btn btn-primary">Edit</button>  </tr>
<?php
}
?>
</table>
</a>
</a>
<?php
mysqli_close($conn);
?>

</body>
</html
