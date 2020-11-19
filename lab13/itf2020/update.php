<?php
	$conn = mysqli_connect('itf63070051.mysql.database.azure.com', 'kmitl63070051@itf63070051', 'dH4nxosrgh', 'itf63070051');

	$name = $_POST['name'];
	$comment = $_POST['comment'];
	$link = $_POST['link'];
	$id = $_POST['id'];
	$query = mysqli_query($con, 'UPDATE guestbook SET name = "'.$name.'", comment = "'.$comment.'", link = "'.$link.'" WHERE id = '.$id.'');
	if($query){
		echo "<script>alert(\"แก้ไขข้อมูลสำเร็จ\");</script> <script>window.location.replace(\"index.php\");</script>";
	  }
	  else{
		echo "<script>alert(\"แก้ไขข้อมูลไม่สำเร็จ\");</script> <script>window.location.replace(\"index.php\");</script>";
	  }
?>