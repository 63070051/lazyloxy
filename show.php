<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itf63070051.mysql.database.azure.com', 'kmitl63070051@itf63070051', 'dH4nxosrgh', 'itf63070051', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">name</div></th>
    <th width="350"> <div align="center">comment </div></th>
    <th width="150"> <div align="center">link </div></th>
    <th width="150"> <div align="center">action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['name'];?></div></td>
    <td><?php echo $Result['comment'];?></td>
    <td><?php echo $Result['link'];?></td>
    <td><a href="edit.php?user=<?php echo $Result['id'];?>" class = "btn btn-primary">edit</a></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>
