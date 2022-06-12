<?php 

    include "database.php";

    $sql = mysqli_query($connection, "SELECT * FROM tb_matkul");
    $result = array();

    while ($fetchData = mysqli_fetch_array($sql)){
        $result[] = $fetchData;
    }

    echo json_encode($result);

?>