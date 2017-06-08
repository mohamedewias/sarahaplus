<?php
include("config.php");

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


if(isset($_POST['emails'])){
	$email=$_POST['email'];
	if(empty($email)){echo "report_problem";}else {
	
$sql = "SELECT * FROM users WHERE `email`='$email'";
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
	$email=$_POST['email'];
	//preg_match_all("#(.*?)\@(.*?)\.(.*?)#i",$email,$email);
	$password=$_POST['password'];
	$password2=$_POST['password2'];
	$fullname=$_POST['fullname'];
	$passport=$_POST['passport'];
	$Personal=$_POST['Personal'];
	$address=$_POST['address'];
	$City=$_POST['City'];
	$state=$_POST['state'];
	$Country=$_POST['Country'];
	$Phone=$_POST['Phone'];
	$Phoneto=$_POST['Phoneto'];
	$Zip=$_POST['Zip'];
	$Comments=$_POST['Comments'];
	$type=$_POST['type'];
	if(empty($username)){echo "report_problem";}else{
	$sql = "SELECT * FROM users WHERE `username`='$username'";
$result = $conn->query($sql);
   $opion=''; 
if ($result->num_rows > 0) {
    // output data of each row
   echo "report_problem";
    }
 elseif(empty($email)){echo "report_problem";}else {
    $sql = "SELECT * FROM users WHERE `email`='$email'";
$result = $conn->query($sql);
   $opion=''; 
if ($result->num_rows > 0) {
    // output data of each row
   echo "report_problem";
    }
 elseif(empty($password)){
	 echo "report_problem";
	 }elseif($password!=$password2){echo "report_problem";}
	 elseif(empty($fullname)){echo "report_problem";}
elseif(empty($passport)){echo "report_problem";}
elseif(empty($Personal)){echo "report_problem";}
elseif(empty($address)){echo "report_problem";}
elseif(empty($City)){echo "report_problem";}
elseif(empty($state)){echo "report_problem";}
elseif(empty($Country)){echo "report_problem";}
elseif(empty($Phone)){echo "report_problem";}
elseif(empty($Zip)){echo "report_problem";}
elseif(empty($Comments)){echo "report_problem";}
elseif(empty($type)){echo "report_problem";}
else{
$sql = "INSERT INTO `users` (`username`,`email`,`password`,`fullname`,`type`,`passport`,`Personal`,`address`,`City`,`state`,`Country`,`Phone`,`Phoneto`,`Zip`,`Comments`,`Grade`)
 VALUES ('$username','$email','$password','$fullname','$type','$passport','$Personal','$address','$City','$state','$Country','$Phone','$Phoneto','$Zip','$Comments','1')";

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
}



if(isset($_POST['adsubmit'])){
	$fullname=$_POST['fullname'];
	$passport=$_POST['passport'];
	$Personal=$_POST['Personal'];
	$address=$_POST['address'];
	$City=$_POST['City'];
	$state=$_POST['state'];
	$Country=$_POST['Country'];
	$Phone=$_POST['Phone'];
	$Phoneto=$_POST['Phoneto'];
	$Zip=$_POST['Zip'];
	$Comments=$_POST['Comments'];
	$type=$_POST['type'];
	$id=$_POST['id'];
	if(empty($fullname)){echo "report_problem";}
elseif(empty($passport)){echo "report_problem";}
elseif(empty($Personal)){echo "report_problem";}
elseif(empty($address)){echo "report_problem";}
elseif(empty($City)){echo "report_problem";}
elseif(empty($state)){echo "report_problem";}
elseif(empty($Country)){echo "report_problem";}
elseif(empty($Phone)){echo "report_problem";}
elseif(empty($Zip)){echo "report_problem";}
elseif(empty($Comments)){echo "report_problem";}
elseif(empty($type)){echo "report_problem";}
else{
$sql = "INSERT INTO `Grade` (`fullname`,`type`,`passport`,`Personal`,`address`,`City`,`state`,`Country`,`Phone`,`Phoneto`,`Zip`,`Comments`,`Grade`)
 VALUES ('$fullname','$type','$passport','$Personal','$address','$City','$state','$Country','$Phone','$Phoneto','$Zip','$Comments','$id')";

if ($conn->query($sql) === TRUE) {
    echo "done";
    ?>
<script type="text/javascript">window.location="profile.php"</script>
    

    
    <?php
 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
	

}










$conn->close();
?>
