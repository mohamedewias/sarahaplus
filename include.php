<?php

session_start();

if(isset($_GET['user'])){
	include 'send.php';
}elseif(isset($_SESSION['id'])){
	include 'msg.php';
	}else{
		include 'home.php';
		}
	
?>
