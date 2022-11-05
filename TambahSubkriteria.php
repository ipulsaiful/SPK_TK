
<?php

	$koneksi = new PDO('mysql:host=localhost;dbname=spk_pemilihan_tk','root','');
	$id_kriteria = $_POST['id_kriteria'];
	foreach ($_POST['nama_subkriteria'] as $key => $value) {
		$sql = "INSERT INTO sub_kriteria(id_kriteria,nama_subkriteria,nilai_subkriteria) VALUES(:idkriteria,:namasubkriteria, :nilaisubkriteria)";
		$stmt = $koneksi->prepare($sql);
		$stmt->execute([

			'idkriteria' => $id_kriteria,
			'namasubkriteria' => $value,
			'nilaisubkriteria' => $_POST['nilai_subkriteria'][$key]
		]);

	}
	echo 'berhasil tambah data';      

?>