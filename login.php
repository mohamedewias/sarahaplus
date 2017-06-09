<?php
include 'config.php';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$password=$_POST['password'];
	

if(empty($name)){echo "report_problem";}else {
    $sql = "SELECT * FROM users WHERE `username`='$name'";
$result = $conn->query($sql);
   
if ($result->num_rows > 0) {
    if(empty($password)){echo "report_problem";}
    else{
    $row = $result->fetch_assoc();
    if($password==$row['password']){
		$_SESSION['id']=$row['id'];
		$_SESSION['name']=$row['username'];

		echo "done";
		?>
<script type="text/javascript">window.location="index.php"</script>
    

    
    <?php
		}else{echo "report_problem";}
    }}
    else{echo "not find $name";}
    }}
    ?>
