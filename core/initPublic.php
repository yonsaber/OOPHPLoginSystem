<?php
	session_start();
	$GLOBALS['config'] = array(
		'mysql'		=> array(
			'host'		=> '127.0.0.1',
			'username'	=> 'username',
			'password'	=> 'password',
			'db'		=> 'databasename',
		),
		'remember'	=> array(
			'cookieName'	=> 'hash',
			'cookieExpiry'	=> 604800,	//1 Week
		),
		'session'	=> array(
			'sessionName'	=> 'user'
		)
	);
?>