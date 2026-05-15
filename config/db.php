<?php

//$host = 'localhost';
$host = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'student_system';
$port = 3306;

$conn = new mysqli($host, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}