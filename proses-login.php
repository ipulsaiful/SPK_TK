<?php
session_start();
require_once 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE 
		username='$username' AND password='$password' ";

// $result = $db->query($sql);
$result = mysqli_query($db, $sql);

if($result->num_rows > 0){//menghitung jumlah record dari sql
	$_SESSION = $result->fetch_assoc();// assoc berupa string
	// $_SESSION = mysqli_fetch_assoc($result);
	$_SESSION['login'] = true;
	echo "Selamat Datang ".$_SESSION['username']."<br>";
	// var_dump($_SESSION);
	header("location:admin.php?id=null"); 
}else{
	echo "Username dan password salah";
	//header("location:login.php");

}

?>