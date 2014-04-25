<?php
	if(isset($_POST['username'])){
		if(!isset($_SESSION)){
			session_start();			
		}
		
		include_once '../../lib/common.func.php';
		include_once '../../model/user.php';
		
		$username = trimSql($_POST['username']);
		$password = md5(trimSql($_POST['password']));
		
		$userInfo = getUserinfo($username);
		if(!empty($userInfo) && $userInfo['password'] == $password){
			$_SESSION['login_user'] = $username;
			echo 'true';
		}
	}