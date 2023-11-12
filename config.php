<?php

$host = 'localhost';
$db = 'cv1';
$user = 'root';
$pass = '';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    echo 'Connection failed!';
}
