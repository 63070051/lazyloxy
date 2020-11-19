<?php
  $con = mysqli_connect('itf63070051.mysql.database.azure.com', 'kmitl63070051@itf63070051', 'dH4nxosrgh', 'itf63070051') or die("Error");
  $id = $_GET["user"];
  $query = mysqli_query($con, "delete from guestbook where id = ".$id."");
  if($query){
    echo "<script>alert(\"ลบข้อมูลสำเร็จ\");</script> <script>window.location.replace(\"index.php\");</script>";
  }
  else{
    echo "<script>alert(\"ลบข้อมูลไม่สำเร็จ\");</script> <script>window.location.replace(\"index.php\");</script>";
  }
?>