<?php
include("koneksi.php");


$sql = "DELETE FROM sub_kriteria where id_subkriteria=".$_GET['idsubkriteria'];

    if ($db->query($sql)==TRUE) {
        echo "Berhasil hapus data";
        header("location:EditKriteria.php?id=".$_GET[id]);
    }else{
        echo "Error deleting record: " . $db->error;
    }

?>