<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itf63070051.mysql.database.azure.com', 'kmitl63070051@itf63070051', 'dH4nxosrgh', 'itf63070051', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = "INSERT INTO guestbook (name , comment , link) VALUES ('$name', '$comment', '$link')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
