<?php
include("koneksi.php");

/*if (@$_GET['ACT']=="tambah") {
    $namatk = $_POST['nama_tk'];
    $biaya_spp = $_POST['kriteria1'];
    $biaya_masuk = $_POST['kriteria2'];
    $batas_tampung = $_POST['kriteria3'];
    $jumlah_pengajar = $_POST['kriteria4'];
    $akreditasi = $_POST['kriteria5'];
    $abk = $_POST['kriteria6'];
    $jumlah_fasilitas = $_POST['kriteria7'];

    $sql = "INSERT INTO data_tk (Id_TK, Nama_TK, biaya_spp, biaya_masuk, batas_tampung, jumlah_pengajar, akreditasi, abk, jumlah_fasilitas) VALUES (NULL,'$namatk','$biaya_spp','$biaya_masuk','$batas_tampung','$jumlah_pengajar','$akreditasi','$abk','$jumlah_fasilitas');";

    if ($db->query($sql) == TRUE) {
        echo "New record created successfully";
        header('location:admin.php');
    
    }else {
        echo "Error: " . $sql . "<br>" . $db->error;
        

        }
$db->close();
}

elseif (@$_GET['edit']=="Simpan") {
    $id_tk = $_GET['id_tk'];
    $namatk = $_GET['nama_tk'];
    $biaya_spp = $_GET['kriteria1'];
    $biaya_masuk = $_GET['kriteria2'];
    $batas_tampung = $_GET['kriteria3'];
    $jumlah_pengajar = $_GET['kriteria4'];
    $akreditasi = $_GET['kriteria5'];
    $abk = $_GET['kriteria6'];
    $jumlah_fasilitas = $_GET['kriteria7'];

    $jumlah_fasilitas;
    $sql = "UPDATE data_tk SET Nama_TK = '$namatk', biaya_spp ='$biaya_spp', biaya_masuk = '$biaya_masuk', batas_tampung = '$batas_tampung', jumlah_pengajar = '$jumlah_pengajar', akreditasi='$akreditasi', abk= '$abk',jumlah_fasilitas = '$jumlah_fasilitas' WHERE data_tk.Id_TK='$id_tk'";
 
    if($db->query($sql)==TRUE){
        echo "Berhasil Ubah Data";
        header('location:admin.php');

    }else{
        echo "Error updating record: " . $db->error;
    }
}
elseif(@$_GET['ACT']=="hapus"){
    $sql = "DELETE FROM data_tk where Id_TK=".$_GET['id'];

    if ($db->query($sql)==TRUE) {
        echo "Berhasil hapus data";
        header("location:admin.php");
    }else{
        echo "Error deleting record: " . $db->error;
    }
}
*/
?>