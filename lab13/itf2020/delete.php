<?php
  $con = mysqli_connect('itf63070051.mysql.database.azure.com', 'kmitl63070051@itf63070051', 'dH4nxosrgh', 'itf63070051') or die("Error");
  $id = $_GET["id"];
  $query = mysqli_query($con, "delete from guestbook where id = ".$id."");
  if($query){
    header("location: index.php");
  }
  else{
    echo "<script>alert(\"ลบข้อมูลไม่สำเร็จ: ".mysqli_error($conn)."\");</script> <script>window.location.replace(\"index.php\");</script>";
  }
?>