<?php

	include_once 'mysql.class.php';
	//此处编写常用函数
	//跳转函数
	function showMessage($url,$message,$color = 'black'){
		echo <<<EOF
		<h3 align="center" style="color:{$color}">$message</h3>
		<script type="text/javascript">
			setTimeout(function(){
				window.location.href="$url";
				},1500);
		</script>
EOF;
	}
	
	//判断用户是否登录
	function checkLogin($session,$url = 'index.php',$message = 'You haven\'t logged in,please login first...'){
		if(!isset($session['login_user'])){
			showMessage($url, $message);
		}
	}
	
	//过滤插入数据库特殊字符
	function trimSql($str){
		return mysqli_real_escape_string(mysql::getInstance()->getConn(), $str);
	}
	
	