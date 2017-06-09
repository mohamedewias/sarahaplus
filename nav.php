<?php
session_start();
if(isset($_SESSION['id'])){ ?>
									<li>
                                        <a href="javascript:void(0);" id="exit">خروج</a>
                                    </li>
									<li>
                                        <a href="javascript:void(0);" id="profile">الملف الشخصي</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" id="msg">الرسائل</a>
                                    </li>
	<?php
	}else{
		?>
		<li>
                                        <a href="javascript:void(0);" id="reg">تسجيل</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" id="login">دخول</a>
                                    </li>
		<?php
		}


?>
