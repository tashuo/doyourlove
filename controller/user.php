<?php
	$allow_ops = array('login','logout','manage','register');
	$op = empty($_GET['op'])?$allow_ops[0]:htmlspecialchars($_GET['op']);
	
	if(in_array($op, $allow_ops)){
		if($op == 'logout'){
			checkLogin($_SESSION);
			unset($_SESSION['login_user']);
			session_destroy();
			showMessage('index.php', 'Logging out...Trun to the login page','green');
		}elseif($op == 'manage'){
			checkLogin($_SESSION);
			echo '<h2 align="center">个人中心</h2>';
		}elseif ($op == 'login'){
			if(isset($_SESSION['login_user'])){
				echo 'login success';
			}else{
				include ROOT.'/modules/login.html';
			}
			
		}elseif($op == 'register'){
			include ROOT.'/modules/register.html';
		}
	}