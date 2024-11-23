<?php

include "config.php";

$servername = $conf["db"]["server"];
$username = $conf["db"]["username"];
$password = $conf["db"]["password"];
$dbname = $conf["db"]["database"];

$conn = new mysqli($servername, $username, $password, $dbname);

$conn->set_charset("utf8");
