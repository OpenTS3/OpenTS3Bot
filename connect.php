<?php

// datos para la coneccion a mysql

define('DB_SERVER','localhost');

define('DB_NAME','db');

define('DB_USER','user');

define('DB_PASS','pass');

// Datos TS3

$ip = "ipts";
$port = "port";
$query = "queryport";

// MYSQL CONNECT 

$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);

mysql_select_db(DB_NAME,$con);

?>