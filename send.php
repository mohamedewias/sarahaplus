    <h1 class="cover-heading">صارحني</h1>
                     <textarea cols="50" rows="10" id="sendmsg" style="color:#000"></textarea>
<p class="lead"><a id="sendgo" href="javascript:void(0);" class="btn btn-lg btn-default">ارسال&nbsp;</a></p>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
			$("#sendgo").click(function(){
				var sendmsg=$("#sendmsg").val();
			var vardata="&send&sendmsg="+sendmsg+"&username=<?php echo $_GET['user'] ?>";
		console.log(vardata);
			$.ajax({
			type: "POST",
			url: "../msgsend.php",
			data: vardata,
			success : function(html){
				$("#main").html(html);
				}
			});
			});
		})
        </script>
