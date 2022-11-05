<?php
    include("koneksi.php");
    $sql = mysqli_query($db, "SELECT * FROM data_tk");
    $result = array();
    
    while ($row = mysqli_fetch_assoc($sql)) {
        $data[] = $row;
    }

    echo json_encode(array("result" => $data));
    //echo json_encode($data);
?>