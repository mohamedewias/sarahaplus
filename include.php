<?php

session_start();
include "config.php" ;
if($_GET['user'] != ""){
	$username=$_GET['user'];
	$sql = "SELECT * FROM users WHERE `username`='$username'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

	include 'send.php';    }else{
		echo "الرابط خطئ";
		}
}elseif(isset($_SESSION['id'])){
	include 'msg.php';
	}else{
		include 'home.php';
		}
	
?>
