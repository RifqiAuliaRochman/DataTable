<?php
    $db_host = "localhost" ;
    $db_user = "root" ;
    $db_pass = "";
    $db_name = "db_kampus" ;

    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if($connection){
        echo "";
    } else {
        echo "Koneksi Gagal". mysql_connect_error();
    }
    ?>
