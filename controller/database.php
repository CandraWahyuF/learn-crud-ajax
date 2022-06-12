<?php 

    $connection = mysqli_connect("localhost", "root", "", "crud_ajax");

    if (!$connection){
        echo "koneksi gagal";
    }


?>