<?php 

//WEB CONFIG
$WEB_CONFIG = [
	'app_name' => 'ACCOUNT MANAGER', 
	'base_url' => 'http://localhost/accountmanager/'
];

//DATABASE CONFIG
$DB_CONFIG = [
	'host' => 'localhost',
	'user' => 'root',
	'passwd' => '',
	'db_name' => 'accountmanager_db'
];		
$connect = mysqli_connect($DB_CONFIG['host'], $DB_CONFIG['user'], $DB_CONFIG['passwd'], $DB_CONFIG['db_name']);
