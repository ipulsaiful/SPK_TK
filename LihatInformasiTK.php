<?php
include("koneksi.php");
if (isset($_POST['cari'])) {
	$key = $_POST['katakunci'];
	$sql = "SELECT * FROM data_tk where Nama_TK LIKE'%$key%' OR jumlah_pengajar LIKE'%$key%' OR abk LIKE'%$key%'";
}else{

	$sql = "SELECT * FROM data_tk";
}

$result = $db->query($sql);
?>