<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab13-069.mysql.database.azure.com', 'it63070069@lab13-069', 'SMCbvq72', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>

  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>

  </tr>
<?php
}
?>
</table>
<a href="form.html">
  <button type="submit" class="btn btn-primary">Submit</button>
</a>
<a href="insert1.php">
  <button type="delete" class="btn btn-primary">Delete</button>
</a>
<?php
mysqli_close($conn);
?>

</body>
</html>