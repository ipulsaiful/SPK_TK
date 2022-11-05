<?php
include('koneksi.php');
$com ="SELECT * FROM kriteria_tk";
$has = $db->query($com);

while ($x=$has->fetch_assoc()) {
	$datkrit[] = $x['nama_kriteria'];
}

//sprint_r($datkrit);

//$array = array('apple', 'orange', 'strawberry', 'blueberry', 'kiwi');

//array_splice($array, 1, 1);

//print_r($array);


?>