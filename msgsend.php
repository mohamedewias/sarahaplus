<?php
include "config.php";
if(isset($_POST['send'])){
	$username=$_POST['username'];
	$msg=$_POST['sendmsg'];
	
$sql = "INSERT INTO `msg` (`username`,`msg`)
 VALUES ('$username','$msg')";

if ($conn->query($sql) === TRUE) {
    echo "تم ارسال رسالتك بنجاح";


 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>
