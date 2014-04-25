<?php
	if(!isset($_SESSION)){
		session_start();
	}
	
	include_once '../../lib/common.func.php';
	include_once '../../model/user.php';
	
	if(isset($_POST['username'])){
		$username = trimSql($_POST['username']);
		$password = md5(trimSql($_POST['password']));
		$email    = trimSql($_POST['email']);
		$sex      = trimSql($_POST['sex']);
		$register_time = time();
		
		if(addUser($username, $password, $email, $sex, $register_time) == 1){
			$_SESSION['login_user'] = $username;
			echo 'true';
		}else{
			//echo 'false';
		}
	}