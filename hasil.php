<?php 
session_start();
//include("test.php");
$a = $_POST['data'];

 echo print_r($a);
$_SESSION['array'] = $a;
 ?>

 <a href="admin.php">test</a>

