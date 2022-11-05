<?php 
if (!isset($_SESSION['login'])){
	header("Refresh:1;url=index.php");
	die();
}