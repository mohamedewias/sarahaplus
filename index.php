<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Cover Template for Bootstrap</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="cover.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body dir="rtl">
        <div class="site-wrapper">
            <div class="site-wrapper-inner">
                <div class="cover-container">
                    <div class="masthead clearfix">
                        <div class="inner">
                            <h3 class="masthead-brand"><a id="home" href="file:///tmp/.org.chromium.Chromium.bNpmNg/frameworks/bootstrap3.3.7/template/cover.html?pgid=1&amp;pgedit=1&amp;pglive=1#" style="outline: -webkit-focus-ring-color auto 5px; outline-offset: -2px; position: relative; display: block; padding: 10px 0px; font-size: 16px; font-weight: bold; border-bottom-width: 2px; border-bottom-style: solid; border-bottom-color: rgb(255, 255, 255); background-color: rgb(51, 51, 51);">صراحة بلس</a></h3>
                            <nav>
                                <ul class="nav masthead-nav" id="ulnav">
     
                                   
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="inner cover" id="main">
                        
                    </div>
                    <div class="mastfoot">
                        <div class="inner">
                            <p>2017 by mohamed ewias.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
        <script type="text/javascript">
			$(document).ready(function(){
				$.ajax({
			type: "POST",
			url: "../include.php?user=1",
			
			success : function(html){
				$("#main").html(html);
				}
			});
			$.ajax({
			type: "POST",
			url: "../nav.php",
			
			success : function(html){
				$("#ulnav").html(html);
				}
			});
        $("#reg,#rege").click(function(){
			$.ajax({
			type: "POST",
			url: "../user.html",
			
			success : function(html){
				$("#main").html(html);
				}
			});
			});
			$("#login").click(function(){
			$.ajax({
			type: "POST",
			url: "../login.html",
			
			success : function(html){
				$("#main").html(html);
				}
			});
			});
			$("#profile").click(function(){
			$.ajax({
			type: "POST",
			url: "../profile.php",
			
			success : function(html){
				$("#main").html(html);
				}
			});
			});
			$("#msg").click(function(){
			$.ajax({
			type: "POST",
			url: "../msg.php",
			
			success : function(html){
				$("#main").html(html);
				}
			});
			});
			$("#exit").click(function(){
			$.ajax({
			type: "POST",
			url: "exit.php",
			
			success : function(html){
				$("#main").html(html);
				}
			});
			});
			});
        </script>
    </body>
</html>
