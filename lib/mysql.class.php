<?php
//mysql 单例模式
	class mysql{
		private $_db;
		private static $_instance;
		
		private function __construct($config){
			$this->_db = mysqli_connect($config['host'], $config['user'], $config['password'], $config['database']) OR die(mysqli_error());
			$this->query("SET NAMES '{$config['charset']}'",$this->_db);
			return $this->_db;
		}
		
		private function __clone(){}
		
		public static function getInstance(){
			if(FALSE == (self::$_instance instanceof self)){
				$config = require('../../config.ini.php');
				self::$_instance = new self($config);
			}
			return self::$_instance;
		}
		
		//获取数据库连接，主要用于mysqli_real_escape_string函数的封装
		public function getConn(){
			return $this->_db;
		}
		
		public function query($sql){
			return mysqli_query($this->_db, $sql);
		}
		
		public function fetch_array($query,$result_type = MYSQLI_ASSOC){
			return mysqli_fetch_array($query, $result_type);
		}
		
		public function fetch_first($sql){
			return $this->fetch_array($this->query($sql));
		}
		
		public function affected_rows(){
			return mysqli_affected_rows($this->_db);
		}
		
		public function num_rows($query){
			return mysqli_num_rows($query);
		}
		
		public function insert_id(){
			return mysqli_insert_id($this->_db);
		}
		
		public function close(){
			return mysqli_close($this->_db);		
		}
	}
	
	
	
	