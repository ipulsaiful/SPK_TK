<?php
require 'vendor/autoload.php';
$server = "localhost"; 
$user   = "root"; 
$pass   = ""; 
$dbname = "spk_pemilihan_tk" ;

$db = mysqli_connect($server, $user, $pass, $dbname);

//pesan error jika koneksi gagal
if (!$db) {  
    die("Connection failed: " . mysqli_connect_error());  
}
if (isset($_POST['submit'])) {
	$err ="";
	$ekstensi ="";
	$success = "";

	$file_name = $_FILES['filexls']['name'];
	$file_data = $_FILES['filexls']['tmp_name']; 

	if (empty($file_name)) {
		$err .= "<li>Silahlan masukan file terlebih dahulu</li>";
	}else{
		$ekstensi = pathinfo($file_name)['extension'];

	}

	$ektensi_allowed = array("xls","xlsx");
	if (!in_array($ekstensi, $ektensi_allowed)) {
		$err .= "<li>Silahlan masukan file excel (xsl, xlsx). <br> file yang kamu masukkan <b>$file_name</b> berekstensi <b>$ekstensi</b></li>";
		
	}

	if ($err) {
		?>
		<div class="alert alert-danger">
			<ul>
				<?php echo $err ?>
			</ul>
		</div>
		<?php
	}

	if ($success) {
		?>

		<div class="alert alert-danger">
			<ul>
				<?php echo $success ?>
			</ul>
		</div>
		<?php
	}
}
?>