<?php
  $con = mysqli_connect('itf63070051.mysql.database.azure.com', 'kmitl63070051@itf63070051', 'dH4nxosrgh', 'itf63070051') or die("Error");
  $name = $_POST["name"];
  $comment = $_POST["comment"];
  $link = $_POST["link"];
  $query = mysqli_query($con, "insert into guestbook (name, comment, link) value ('".$name."', '".$comment."', '".$link."')");
  if($query){
    echo "<script>alert(\"เพิ่มข้อมูลสำเร็จ\");</script> <script>window.location.replace(\"index.php\");</script>";
  }
  else{
    echo "<script>alert(\"เพิ่มข้อมูลไม่สำเร็จ\");</script> <script>window.location.replace(\"index.php\");</script>";
  }
?>