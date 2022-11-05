<?php 

$server = "localhost"; 
$user   = "root"; 
$pass   = ""; 
$dbname = "spk_pemilihan_tk" ;

$db = mysqli_connect($server, $user, $pass, $dbname);

//pesan error jika koneksi gagal
if (!$db) {  
    die("Connection failed: " . mysqli_connect_error());  
}

 ?>