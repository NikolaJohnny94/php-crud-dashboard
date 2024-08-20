<?php

define('PROTOCOL', 'http');
define("DB_HOST", "db host");
define("DB_USER", "db user");
define("DB_PASS", "password");
define("DB_NAME", "db name");
define('BASE_URL', PROTOCOL . '://' . DB_HOST  . dirname($_SERVER['PHP_SELF']) . '/');


// Create connection
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection

if ($connection->connect_error) {
    die('Connection failed' . $connection->connect_error);
}
