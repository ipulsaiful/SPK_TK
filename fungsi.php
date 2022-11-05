<?php 

function getSubKriteria(){
	require_once("koneksi.php");
	$sql = "SELECT nama_subkriteria,nilai_subkriteria FROM sub_kriteria";
	$result = mysqli_query($db,$sql);

	while ($row=mysqli_fetch_assoc($result)) {
			$data[]= [0=>$row['nama_subkriteria'],1=>$row['nilai_subkriteria']];
			//$data[]= $row;
		}	
		return $data;
}

function StripString($data){
	for ($i=0; $i <count($data) ; $i++) {
			 $data[$i][0]=str_replace(",", "", $data[$i][0]);		
			 $data[$i][0]=str_replace(" ", "", $data[$i][0]);
			 $data[$i][0]=str_replace("Rp.", "", $data[$i][0]);
			 $data[$i][0]=str_replace(">", "", $data[$i][0]);
			 $data[$i][0]=str_replace("<=", "", $data[$i][0]);
			 //$data[$i][$m]=str_replace("Pengajar", "", $data[$i][$m]);
			 $data[$i][0]=str_replace("Siswa", "", $data[$i][0]);
			
		
		
}
return $data;
}



$dat = StripString(getSubKriteria());

$biaya_spp1 = explode("-",$dat[0][0]);

echo var_dump($biaya_spp1); 

 ?>
