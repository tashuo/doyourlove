<?php

	define('ROOT',dirname(__FILE__));
	$arr_allow_first_param = array('about','login','register','home','yard','street','ta');

	$str_url_param = $_SERVER["REQUEST_URI"];
	$arr_params = explode('/',$str_url_param);

	$str_param = $arr_params[1] == ''?$arr_allow_first_param[0]:$arr_params[1];
	//var_dump($str_param);
	
	if(in_array($str_param, $arr_allow_first_param)){
		include ROOT."/modules/{$str_param}/index.php";
	}else{
		include ROOT."/modules/about/index.php";
	}

