<?php
	
	//some functions of users
	function getUserinfo($username){
		if(isset($username)){
			return mysql::getInstance()->fetch_first("SELECT * FROM user WHERE username = '{$username}'");
		}
	}
	
	function addUser($username,$password,$email,$sex,$register_time){
		mysql::getInstance()->query("INSERT INTO user VALUE(null,'{$username}','{$password}','{$email}',{$sex},0,{$register_time},null)");
		return mysql::getInstance()->affected_rows();
	}