<?php
    $conn = mysqli_init();
    mysqli_real_connect($conn, 'itf63070051.mysql.database.azure.com', 'kmitl63070051@itf63070051', 'dH4nxosrgh', 'itf63070051', 3306);
    if(mysqli_connect_errno($conn)){
        echo "connect fail".mysqli_connect_error();
    }

?>