<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	//DATABASE DEVELOPMENT
	/*'connectionString' => 'mysql:host=localhost;dbname=siasoftware_bd_blog_yii',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',/*

	//DATABASE TEST
	/*'connectionString' => 'mysql:host=localhost;dbname=blog_fernando',
	'emulatePrepare' => true,
	'username' => '',
	'password' => '',
	'charset' => 'utf8',*/

	//DATABASE PRODUCTION
	'connectionString' => 'mysql:host=localhost;dbname=theturk_blog_fernando',
	'emulatePrepare' => true,
	'username' => 'theturk_fernando',
	'password' => 'o-b_Ed~%$k?-',
	'charset' => 'utf8',
);
