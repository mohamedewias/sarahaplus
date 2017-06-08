<?php
session_start();
$servername = "localhost";
$username = "adsxupco_saef";
$password = "1!2@3#4$";
$dbname = "adsxupco_saef";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

function xri($n){
$rxri='';
while($n>0){
$nxr=$n/2 ;	
$f = intval($nxr);
if($nxr == $f){
	$rxri='0'.$rxri;
	$n=$n/2;
	}else{
		$rxri='1'.$rxri;
		$n=$n-1;
		$n=$n/2;
		}
		
	}
	
	return 	$rxri;
	
	
	}
function xxri($n){
$rxrw=0;
$w=1;
while($n>0){
	
$nxr=$n/10 ;	
$f = intval($nxr);
if($nxr == $f){
	$rxri=0;
	$n=$n/10;
	$rw=$w*$rxri;
	$rxrw=$rxrw+$rw;
	$w=$w*2;
	}else{
		$n=$n-1;
		$n=$n/10;
		$rxri=1;
		$rw=$w*$rxri;
		$rxrw=$rxrw+$rw;
		$w=$w*2;
		}
		
	}
	
	return 	$rxrw;
	
	
	}






?>
