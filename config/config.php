<?php
 	
	/** 数据库配置 **/
	 
	// define('DB_NAME', 'test');
	// define('DB_USER', 'root');
	// define('DB_PASSWORD', 'asdfghjkl;\'');
	// define('DB_HOST', 'localhost');
	
	$medoo = array(
		'database_type' => 'mysql',
		'database_name' => 'gcn',
		'server' => 'localhost',
		'username' => 'gcn',
		'password' => 'gcn@2017',
		'charset' => 'utf8',
	);
	define('MEDOO', $medoo);
	/** 日志配置 */
	define('LOG_DRIVE', 'File');
	define('LOG_PATH', ROOT_PATH . 'log');