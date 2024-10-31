<?php

$host = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'crud';
$mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($mysqli->connect_errno) {
    die('Database connectionn failure');
}
