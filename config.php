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










$sql = "SELECT * FROM users WHERE `id`='$_SESSION[id]'";
$result = $conn->query($sql);				
$row = $result->fetch_assoc();

$sqloo = "SELECT * FROM Airlines";
$resultoo = $conn->query($sqloo);
   $opionAirlines='';
if ($resultoo->num_rows > 0) {
    // output data of each row
    while($rowoo = $resultoo->fetch_assoc()) {
        $opionAirlines.= '<option value="'.$rowoo["id"].'">'.$rowoo["nameen"].' - '.$rowoo["code"].'</option>';
	}}


$sqli = "SELECT * FROM Airports";
$resulti = $conn->query($sqli);
   $opion=''; $airports='';
if ($resulti->num_rows > 0) {
    // output data of each row
    while($rowi = $resulti->fetch_assoc()) {
        $opion.= '<option value="'.$rowi["id"].'">'.$rowi["airportName"].' - '.$rowi["airportCode"].'</option>';
        $airports.='<div class="form-group  well btn-group "><a  data-toggle="collapse"  href="#airport'.$rowi["id"].'"><h3>'.$rowi["airportCode"].'</h3><p>'.$rowi["airportName"].'</p><h3>'.$rowi["cityCode"].'</h3><p>'.$rowi["cityName"].'</p><h3>'.$rowi["countryCode"].'</h3><p>'.$rowi["countryName"].'</p></a><div>
        <div id="airport'.$rowi["id"].'" class="panel-collapse collapse">
      <div class="panel-body">
      <div class="form-group  is-empty btn-group col-lg-3 col-md-4 col-ms-12"  data-toggle="buttons">
		<i class="material-icons">airplanemode_active</i>
		<label>كود المطار : </label>
		<input class="form-control" type="text" id="airportCode'.$rowi["id"].'" value="'.$rowi["airportCode"].'">
	    <span class="material-input"></span> </div>          	
		         	
		<div class="form-group  is-empty btn-group col-lg-3 col-md-4 col-ms-12"  data-toggle="buttons">
		<i class="material-icons">place</i>
		<label>اسم المطار</label>
	    <input class="form-control" type="text" id="airportName'.$rowi["id"].'" value="'.$rowi["airportName"].'">
	    <span class="material-input"></span> </div>          	
			<div class="form-group  is-empty btn-group col-lg-3 col-md-4 col-ms-12"  data-toggle="buttons">
		<i class="material-icons">airplanemode_active</i>
		<label>كود المدينة : </label>
		<input class="form-control" type="text" id="cityCode'.$rowi["id"].'" value="'.$rowi["cityCode"].'">
	    <span class="material-input"></span> </div>          	
		         	
		<div class="form-group  is-empty btn-group col-lg-3 col-md-4 col-ms-12"  data-toggle="buttons">
		<i class="material-icons">place</i>
		<label>اسم المدينة</label>
	    <input class="form-control" type="text" id="cityName'.$rowi["id"].'" value="'.$rowi["cityName"].'">
	    <span class="material-input"></span> </div> 
			<div class="form-group  is-empty btn-group col-lg-3 col-md-4 col-ms-12"  data-toggle="buttons">
		<i class="material-icons">airplanemode_active</i>
		<label>كود الدولة :</label>
		<input class="form-control" type="text" id="countryCode'.$rowi["id"].'" value="'.$rowi["countryCode"].'">
	    <span class="material-input"></span> </div>          	
		         	
		<div class="form-group  is-empty btn-group col-lg-3 col-md-4 col-ms-12"  data-toggle="buttons">
		<i class="material-icons">place</i>
		<label>اسم الدولة</label>
	    <input class="form-control" type="text" id="countryName'.$rowi["id"].'" value="'.$rowi["countryName"].'">
	    <span class="material-input"></span> </div> 
	    <button type="submit" class="btn  btn-default" id="airedit'.$rowi["id"].'">edit</button>
												<i class="material-icons" id="air'.$rowi["id"].'"></i>
	  <script type="text/javascript">
         $(document).ready(function(){
         $("#airedit'.$rowi["id"].'").click(function(){
         var airportCode=$("#airportCode'.$rowi["id"].'").val();
			var airportName=$("#airportName'.$rowi["id"].'").val();
			var cityCode=$("#cityCode'.$rowi["id"].'").val();
			var cityName=$("#cityName'.$rowi["id"].'").val();
			var countryCode=$("#countryCode'.$rowi["id"].'").val();
			var countryName=$("#countryName'.$rowi["id"].'").val();
			var vardata="&edit&id='.$rowi["id"].'&airportCode="+airportCode+"&airportName="+airportName+"&cityCode="+cityCode+"&cityName="+cityName+"&countryCode="+countryCode+"&countryName="+countryName;
		console.log(vardata);
				$("#air'.$rowi["id"].'").html("جاري معالجة البيانات"); 
			
		  $.ajax({
			type: "POST",
			url: "../addair.php",
			data: vardata,
			success : function(html){
				$("#air'.$rowi["id"].'").html(html);
				}
			});
		  });
         });
    </script>
      </div>
    </div>
        </div></div>';
    }
}

mysqli_set_charset($conn,"utf8");
$ttt=mktime(date("Y-m-d h:i:sa"));
$dttt=time(date("Y-m-d h:i:sa"));
$nextday = time(date("Y-m-d h:i:sa")) + (24 * 60 * 60)."<br>";
$nextday1= strtotime("+1 day");
$datattt=date("Y-m-d h:i:sa",strtotime("+1 week"));
$datattd=date("Y-m-d h:i:sa",strtotime("+1 day"));
$datattda=date("Y-m-d");
$sqlair = "SELECT * FROM travel  WHERE `date` BETWEEN '$datattda' AND '$datattt'";
$resultair = $conn->query($sqlair);
   $air=''; $table='';
if ($resultair->num_rows > 0) {
    // output data of each row
    while($rowair = $resultair->fetch_assoc()) {
		$xxkig=xri($rowair["price"]);
		///////////////
		$sqlo = "SELECT * FROM Airports  WHERE `id`='$rowair[from]'";
$resulto = $conn->query($sqlo);
  if ($resulto->num_rows > 0) {
    // output data of each row
    $rowo = $resulto->fetch_assoc() ;
       
    
}
		$sqlt = "SELECT * FROM ticket  WHERE `user`='$_SESSION[id]' AND `travel`='$rowair[id]' AND `Grade`='0'";
$resultt = $conn->query($sqlt);
  if ($resultt->num_rows > 0) {
    // output data of each row
    $rowt = $resultt->fetch_assoc() ;
     $button='<button type="submit" class="form-control btn  btn-default" id="delticket'.$rowair["id"].'">الغاء الحجز
     </button>
     <script type="text/javascript">
         $(document).ready(function(){
         $("#delticket'.$rowair["id"].'").click(function(){
			var vardata="&delticket&id='.$rowt["id"].'&xxkig='.$xxkig.'";
			console.log(vardata);
			$("#airticket'.$rowair["id"].'").html("جاري معالجة البيانات"); 
		  $.ajax({
			type: "POST",
			url: "../del.php",
			data: vardata,
			success : function(html){
				$("#airticket'.$rowair["id"].'").html(html);
				$("#delticket'.$rowair["id"].'").attr("id","ticket'.$rowair["id"].'").html("حجز");
				}
			});
		  });
         });
    </script>
     
     ';

    
}else{$button='<button type="submit" class="form-control btn  btn-default" id="ticket'.$rowair["id"].'">حجز
     </button>';
     
     
     
     }
     
     $sqld = "SELECT * FROM Grade WHERE `Grade`='$_SESSION[id]'";
$resultd = $conn->query($sqld);				
//$rowg = $resultg->fetch_assoc();
if ($resultd->num_rows > 0) {
    // output data of each row
    $input="";$button2="";
    while($rowd = $resultd->fetch_assoc()) {
		$input.='<input class="form-control" type="hidden" id="Grade'.$rowd[id].'" value="'.$rowd[id].'">
		';
		$sqlt = "SELECT * FROM ticket  WHERE `user`='$_SESSION[id]' AND `travel`='$rowair[id]' AND `Grade`=$rowd[id]";
$resultt = $conn->query($sqlt);
  if ($resultt->num_rows > 0) {
    // output data of each row
    $rowt = $resultt->fetch_assoc() ;
     $button2.='<button type="submit" class="form-control btn  btn-default" id="delticketg'.$rowair["id"].$rowd["id"].'">الغاء الحجز
    '.$rowd["fullname"].' </button><br>
    <script type="text/javascript">
         $(document).ready(function(){
         $("#delticketg'.$rowair["id"].$rowd["id"].'").click(function(){
			var vardata="&delticketg&id='.$rowt["id"].'&xxkig='.$xxkig.'";
			console.log(vardata);
			$("#airticket'.$rowair["id"].'").html("جاري معالجة البيانات"); 
		  $.ajax({
			type: "POST",
			url: "../del.php",
			data: vardata,
			success : function(html){
				$("#airticket'.$rowair["id"].'").html(html);
				$("#delticketg'.$rowair["id"].$rowd["id"].'").attr("id","ticketg'.$rowair["id"].'").html("حجز '.$rowd["fullname"].'");
				}
			});
		  });
         });
    </script>
    ';

    
}else{$button2.='<button type="submit" name="'.$rowd[id].'" class="form-control btn  btn-default" id="ticketg'.$rowair["id"].$rowd["id"].'">حجز
    '.$rowd["fullname"].' </button><br> 
    <script type="text/javascript">
         $(document).ready(function(){
    $("#ticketg'.$rowair["id"].$rowd["id"].'").click(function(){
			var Grade=$(this).attr("name");
			var vardata="&ticket&user='.$_SESSION["id"].'&travel='.$rowair["id"].'&Grade="+Grade+"&xxkig='.$xxkig.'";
			console.log(vardata);
			$("#airticket'.$rowair["id"].'").html("جاري معالجة البيانات"); 
		  $.ajax({
			type: "POST",
			url: "../addattachment.php",
			data: vardata,
			success : function(html){
				$("#airticket'.$rowair["id"].'").html(html);
				$("#ticketg'.$rowair["id"].$rowd["id"].'").attr("id","delticketg'.$rowair["id"].'").html("الغاء الحجز '.$rowd["fullname"].'");
				}
			});
		  });});
    </script>
    ';
     
     
     
     }
		
		
		}}
		 
		$sqll = "SELECT * FROM Airports  WHERE `id`='$rowair[to]'";
$resultl = $conn->query($sqll);
  if ($resultl->num_rows > 0) {
    // output data of each row
    $rowl = $resultl->fetch_assoc() ;
       
    
}
 
//////////////////////
if($rowair["date"]<=$datattd){
        $air.= '
        <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><i class="material-icons">airplanemode_active</i>
        <a data-toggle="collapse" data-parent="#accordion" href="#co'.$rowair["id"].'">
         الخطوط السعودية (SV)
         <br><i class="material-icons">access_time</i>
     المغادرة   '.$rowair["date"].'
</a>
      </h4>
    </div>
    <div id="co'.$rowair["id"].'" class="panel-collapse collapse">
      <div class="panel-body">
      <div class="form-group  is-empty btn-group col-lg-12 col-md-12 col-ms-12"  data-toggle="buttons">
		<i class="material-icons">airplanemode_active</i>
		<label>من : </label>
		<p>'.$rowo["fullname"].'</p>
	    <span class="material-input"></span> 
	    <label>الي : </label>
		<p>'.$rowl["fullname"].'</p>
	    <span class="material-input"></span>           	
		<label>الوقت : </label>
		<p>'.$rowair["date"].'</p>
	    <span class="material-input"></span>
	    <label>السعر : </label>
		<p>'.$rowair["price"].'</p>
	    <span class="material-input"></span>'
	    
	    .$input  ;
	    
	    if(isset($_SESSION['id'])){
	    $air.=$button."<br>".$button2;
	}
		$air.='<i class="material-icons" id="airticket'.$rowair["id"].'"></i>
	                                        
	                                  
      </div>
    </div>
  </div></div>
        <script type="text/javascript">
         $(document).ready(function(){
         
		  $("#ticket'.$rowair["id"].'").click(function(){
		  
			var vardata="&ticket&user='.$_SESSION["id"].'&travel='.$rowair["id"].'&Grade=0&xxkig='.$xxkig.'";
			console.log(vardata);
			$("#airticket'.$rowair["id"].'").html("جاري معالجة البيانات"); 
		  $.ajax({
			type: "POST",
			url: "../addattachment.php",
			data: vardata,
			success : function(html){
				$("#airticket'.$rowair["id"].'").html(html);
				$("#ticket'.$rowair["id"].'").attr("id","delticket'.$rowair["id"].'").html("الغاء الحجز");
				}
			});
		  });
		  
		  
		  });
		    </script>
        ';}else{$air.= '';}
        $sqltable = "SELECT * FROM ticket  WHERE `user`='$_SESSION[id]' AND `travel`='$rowair[id]' AND `Grade`='0'";
$resulttable = $conn->query($sqltable);
  if ($resulttable->num_rows > 0) {
    // output data of each row
    $rowt = $resultt->fetch_assoc() ;
    $tablea="clear";$alrt="alert alert-success";
}else{$tablea= "add";$alrt="";}
        $table.='
        <tr class="'.$alrt.'";>
	                                        	<th>'.$rowair["id"].'</th>
	                                        	<th>'.$rowo["fullname"].'</th>
	                                        	<th>'.$rowl["fullname"].'</th>
	                                        	
	                                        	<th>'.$rowair["price"].'</th>
	                                        	<th>'.$rowair["date"].'</th>
	                                        	<th>	                                        	
	     		        
<button type="submit" id="goo'.$rowair["id"].'" class="btn btn-white btn-round btn-just-icon" >
<i class="material-icons goo'.$rowair["id"].'">';


$table.=$tablea.'</i><div class="ripple-container"></div>
         
	                                        	
	                                        	
	                                        	</td>
	                                        </tr>
        ';
    }
}



$sqlti = "SELECT * FROM ticket  WHERE `user`='$_SESSION[id]'";
$resultti = $conn->query($sqlti);
  if ($resultti->num_rows > 0) {
    $WWAA=0;
    //$rowti = $resultti->fetch_assoc() ;
    $airti="";
    while($rowti = $resultti->fetch_assoc()) {
		if($rowti["Grade"]==0){ $nameti="خاصة بك";}
		else{
		$sqltig = "SELECT * FROM Grade  WHERE `id`='$rowti[Grade]'";
$resulttig = $conn->query($sqltig);	
			$rowtig = $resulttig->fetch_assoc();
			$nameti=$rowtig["fullname"];
			}
			$datea=date("Y-m-d h:i:sa");
	$sqltid = "SELECT * FROM travel  WHERE `id`='$rowti[travel]' AND `date`>'$datea' ;";
$resulttid = $conn->query($sqltid);
			if ($resulttid->num_rows > 0) {
		$rowtid =$resulttid->fetch_assoc();
		$xxkigd=xri($rowtid["price"]);
		$sqlf = "SELECT * FROM Airports  WHERE `id`='$rowtid[from]'";
$resultf = $conn->query($sqlf);
  if ($resultf->num_rows > 0) {
    // output data of each row
    $rowf = $resultf->fetch_assoc() ;
       
    
}
$sqlft = "SELECT * FROM Airports  WHERE `id`='$rowtid[to]'";
$resultft = $conn->query($sqlft);
  if ($resultft->num_rows > 0) {
    // output data of each row
    $rowft = $resultft->fetch_assoc() ;
       
    
}if($rowti["comp"]==1){$comp="تم الحجز";$WWAA=$WWAA+1;$wwaa="";
	$boot='
	<button type="submit" id="boot'.$rowti["id"].'" class="btn btn-white btn-round btn-just-icon" >
<i class="material-icons">clear</i><div class="ripple-container boot'.$rowti["id"].'"></div>
<script type="text/javascript">
         $(document).ready(function(){
         
		  $("#boot'.$rowti["id"].'").click(function(){
		  
			var vardata="&boot&id='.$rowti["id"].'&xxkig='.$xxkigd.'";
			console.log(vardata);
			$(".boot'.$rowti["id"].'").html("جاري معالجة البيانات"); 
		  $.ajax({
			type: "POST",
			url: "../del.php",
			data: vardata,
			success : function(html){
				$("#co'.$rowti["id"].'").html(html);
				
				}
			});
		  });
		  
		  
		  });
		    </script>
';
	}else{$comp='<a id="comp">تسديد</a><div id="compo"></div>';}
		
				
		$airti.= '
        <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><i class="material-icons">airplanemode_active</i>
        <a data-toggle="collapse" data-parent="#accordion" href="#co'.$rowti["id"].'">
الخطوط السعودية (SV) 
 <br><i class="material-icons">access_time</i>
     المغادرة   '.$rowtid["date"].'
 <br><i class="material-icons">person</i>
المستفيد '.$nameti.'</a>
      </h4>'.$comp.'
    </div>
    <div id="co'.$rowti["id"].'" class="panel-collapse collapse">
   
   
   
         <div class="panel-body">
      <div class="form-group  is-empty btn-group col-lg-12 col-md-12 col-ms-12"  data-toggle="buttons">
		<i class="material-icons">airplanemode_active</i>
		<label>من : </label>
		<p>'.$rowf["fullname"].'</p>
	    <span class="material-input"></span> 
	    <label>الي : </label>
		<p>'.$rowft["fullname"].'</p>
	    <span class="material-input"></span>           	
		<label>الوقت : </label>
		<p>'.$rowtid["date"].'</p>
	    <span class="material-input"></span>
	    <label>السعر : </label>
		<p>'.$rowtid["price"].'</p>
	    <span class="material-input"></span>
	    <label>الغاء الرحلة : </label>
	    '.$boot.'
   </div>
    </div>
   
   
    </div>
    </div>';
		}}
    
}else{
	$airti.= "ليس لديك رحلات محجوزة";
	}


?>
