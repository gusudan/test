<?php

error_reporting(E_ALL);


//URL stuff
define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL','//');
define('URL_DOMAIN',$_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER',  str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);

//DB stuff
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'calendar');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_CHARSET', 'utf-8');