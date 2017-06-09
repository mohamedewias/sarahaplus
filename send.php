    <h1 class="cover-heading">صارحني</h1>
                     <textarea cols="50" rows="10" id="sendmsg" style="color:#000"></textarea>
<p class="lead"><a id="sendgo" href="javascript:void(0);" class="btn btn-lg btn-default">ارسال&nbsp;</a></p>
        <script type="text/javascript">
        $(document).ready(function(){
			$("#sendgo").click(function(){
			$.ajax({
			type: "POST",
			url: "../msgsend.php",
			
			success : function(html){
				$("#main").html("تم ارسال رسالتك");
				}
			});
			});
		}
        </script>
