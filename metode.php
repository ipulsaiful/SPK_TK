<?php
//session_start();
//ob_start();
include("koneksi.php");
//ob_end_clean();
if (isset($_POST['submit'])) {
	$nmbobot1 = $_POST['bobot_1'];
	$nlbobot1 = (1+(1/2)+(1/3)+(1/4)+(1/5)+(1/6)+(1/7))/7;

	$nmbobot2 = $_POST['bobot_2'];
	$nlbobot2 = ((1/2)+(1/3)+(1/4)+(1/5)+(1/6)+(1/7))/7;

	$nmbobot3 = $_POST['bobot_3'];
	$nlbobot3 = ((1/3)+(1/4)+(1/5)+(1/6)+(1/7))/7;

	$nmbobot4 = $_POST['bobot_4'];
	$nlbobot4 = ((1/4)+(1/5)+(1/6)+(1/7))/7;

	$nmbobot5 = $_POST['bobot_5'];
	$nlbobot5 = ((1/5)+(1/6)+(1/7))/7;

	$nmbobot6 = $_POST['bobot_6'];
	$nlbobot6 = ((1/6)+(1/7))/7;

	$nmbobot7 = $_POST['bobot_7'];
	$nlbobot7 = ((1/7))/7;

	
	$bbk = array($nmbobot1 => $nlbobot1,$nmbobot2 => $nlbobot2,$nmbobot3 => $nlbobot3,$nmbobot4 => $nlbobot4,$nmbobot5 => $nlbobot5,$nmbobot6 => $nlbobot6,$nmbobot7 => $nlbobot7);
	
	$key = array_keys($bbk);

	for ($t=0; $t <count($key) ; $t++) { 
		if ($key[$t]=='biaya spp'||$key[$t]=='biaya masuk') {
			$bbk[$key[$t]]= (-$bbk[$key[$t]]);
		}
	}

	$ts = array(); 
	$s = "SELECT * FROM data_tk";
	$ress = $db->query($s);
//menampilkan data TK
	if($ress->num_rows>0){
		$no=1;
		while ($b=$ress->fetch_assoc()) {
			$data[] = array(
				0=> $no,
				1=> $b["Nama_TK"],
				2=> $b["biaya_spp"],
				3=> $b["biaya_masuk"],
				4=> $b["batas_tampung"],
				5=> $b["jumlah_pengajar"],
				6=> $b["akreditasi"],
				7=> $b["abk"],
				8=> $b["jumlah_fasilitas"]);
			$no++;
		}
	}

//menampilkan data subkriteria
	$s2 ="SELECT nama_subkriteria, nilai_subkriteria  FROM sub_kriteria";
	$res = $db->query($s2);
	while ($a = $res->fetch_assoc()) {
		$ts[] = array(
			0 => $a["nama_subkriteria"],
			1 => $a["nilai_subkriteria"]);
	}

//transformasi data/ membuat maktriks keputusan
	for ($i=0; $i <count($data) ; $i++) {
		//echo $data[$i][1]." ";
		for ($k=0; $k <9 ; $k++) {
			for ($n=0; $n <count($ts) ; $n++) { 
				if ($data[$i][$k]==$ts[$n][0]) {	
					//echo 
					$data[$i][$k] = $ts[$n][1];

				}
			}		

		}
		//echo "<br>";

	}
// Menghitung Nilai Si
	for ($zx=0; $zx < count($data) ; $zx++) { 
		$dataSi[$zx][0] = $data[$zx][0];
		$dataSi[$zx][1] = $data[$zx][1]; 
		$dataSi[$zx][2] = pow($data[$zx][2],$bbk['biaya spp'])*pow($data[$zx][3],$bbk['biaya masuk'])*pow($data[$zx][4],$bbk['batas tampung kelas'])*pow($data[$zx][5],$bbk['jumlah pengajar'])*pow($data[$zx][6],$bbk['akreditasi'])*pow($data[$zx][7],$bbk['menerima anak berkebutuhan khusus'])*pow($data[$zx][8],$bbk['jumlah fasilitas']);


	}

	$totalSi = array_sum(array_column($dataSi,2));
//menghitung nilain Vi
	for ($i=0; $i <count($dataSi) ; $i++) { 
		$dataVi[$i][0] = $dataSi[$i][0];
		$dataVi[$i][1] = $dataSi[$i][1];
		$dataVi[$i][2] = $dataSi[$i][2]/$totalSi;
	}
	
array_multisort(array_column($dataVi, 2),SORT_DESC,$dataVi);

	//for ($kl=0; $kl <count($dataVi) ; $kl++) { 

		//echo $dataVi[$kl][0]." ". $dataVi[$kl][1]." nilai Vi = ".$dataVi[$kl][2]."<br>";
	//}
$_SESSION['rank'] = $dataVi;

$redirect = "PilihTK.php?".http_build_query($dataVi);


//header("location: PilihTK.php"); 	
}




?>

