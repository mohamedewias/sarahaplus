    <h1 class="cover-heading">الرسائل</h1>
                        <p class="lead">الصراحة بداية التغيير </p>
                        <p class="lead"><a href="/<?php echo $_SESSION['name'] ?>">
                        الرابط الخاص بك
                        </a></p>
                    <p>
                    <?php 
                    $sql = "SELECT * FROM msg WHERE `username`='$_SESSION[name]'";
$result = $conn->query($sql);
   $opion=''; 
if ($result->num_rows > 0) {
    // output data of each row
   echo "report_problem";
    }
    
                    ?>
                    
                    </p>
