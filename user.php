<?php
include 'config.php';

if(isset($_POST['users'])){
	$username=$_POST['username'];
	if(empty($username)){echo "report_problem";}else{
	
$sql = "SELECT * FROM users WHERE `username`='$username'";
$result = $conn->query($sql);
   $opion=''; 
if ($result->num_rows > 0) {
    // output data of each row
   echo "report_problem";
    }
 else {
    echo "done";
}
}}

if(isset($_POST['passwords'])){
	$password=$_POST['password'];
	 if(empty($password)){echo "report_problem";}else {

	

echo "done";
}}

if(isset($_POST['submits'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password2=$_POST['password2'];

	if(empty($username)){echo "username empty";}else{
	$sql = "SELECT * FROM users WHERE `username`='$username'";
$result = $conn->query($sql);
   $opion=''; 
if ($result->num_rows > 0) {
    // output data of each row
   echo "report_problem";
    }


 elseif(empty($password)){
	 echo "password empty";
	 }elseif($password!=$password2){echo "password != password";}
	 
else{
$sql = "INSERT INTO `users` (`username`,`password`)
 VALUES ('$username','$password')";

if ($conn->query($sql) === TRUE) {
    echo "done";
    ?>
<script type="text/javascript">window.location="index.php"</script>
    

    
    <?php
 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
	
}
}



?>
