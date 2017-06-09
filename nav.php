<?php
session_start();
if(isset($_SESSION['id'])){ ?>
									<li>
                                        <a href="javascript:void(0);" id="exit"><i class="material-icons">exit_to_app</i></a>
                                    </li>
									<li>
                                        <a href="javascript:void(0);" id="profile"><i class="material-icons">person</i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" id="msg"><i class="material-icons">mail</i></a>
                                    </li>
	<?php
	}else{
		?>
		<li>
                                        <a href="javascript:void(0);" id="reg" title="تسجيل" ><i class="material-icons">person_add</i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" id="login" title="دخول" ><i class="material-icons">person</i></a>
                                    </li>
		<?php
		}


?>
