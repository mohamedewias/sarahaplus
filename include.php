<?php

session_start();

if($_GET['user'] != ""){
	include 'send.php';
}elseif(isset($_SESSION['id'])){
	include 'msg.php';
	}else{
		include 'home.php';
		}
	
?>
