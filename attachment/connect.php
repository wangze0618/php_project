<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'kaoshi';

// 连接数据库
$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_error) {
    echo ("连接失败" . $conn->connect_error . '<br/>');
}
echo ('连接数据库成功:' . $database . '<br/>');