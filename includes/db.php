<?php
$config = __DIR__ . '/config.php';
if (!file_exists($config)) $config = __DIR__ . '/config.example.php';
require_once $config;
mysqli_report(MYSQLI_REPORT_OFF);
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) { http_response_code(500); exit('Database connection failed. Import sql/studenthub.sql and check includes/config.php.'); }
$conn->set_charset('utf8mb4');
