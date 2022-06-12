<?php 
    include "database.php";

    $nama_matkul = $_POST['nama_matkul'];
    $sks = $_POST['sks'];

    $sql = mysqli_query($connection, "INSERT INTO tb_matkul VALUES (NULL, '$nama_matkul', '$sks')");

    if ($sql) {
        $result["status"] = 1;
        $result["notif"] = "Berhasil ditambahkan.";
    }
    else {
        $result["status"] = 0;
        $result["notif"] = "Gagal ditambahkan.";
    }

    echo json_encode($result);


?>