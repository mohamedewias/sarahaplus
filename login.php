<?php
include("config.php");


if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	

if(empty($email)){echo "report_problem";}else {
    $sql = "SELECT * FROM users WHERE `email`='$email'";
$result = $conn->query($sql);
   
if ($result->num_rows > 0) {
    if(empty($password)){echo "report_problem";}
    else{
    $row = $result->fetch_assoc();
    if($password==$row['password']){
		$_SESSION['id']=$row['id'];
		$_SESSION['Rank']=$row['Rank'];
		echo "done";
		?>
<script type="text/javascript">window.location="index.php"</script>
    

    
    <?php
		}else{echo "report_problem";}
    }}}}

	

$conn->close();







?>
