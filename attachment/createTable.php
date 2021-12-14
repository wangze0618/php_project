<?php

include 'connect.php';

// 创建表
$sql = "CREATE TABLE chengji(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY COMMENT '编号',
    kaoshi VARCHAR(10) NOT NULL COMMENT '考号',
    xm VARCHAR(12) NOT NULL COMMENT '姓名',
    cj INT COMMENT '成绩',
    zhaopian VARCHAR(50) NOT NULL COMMENT '照片')";

if ($conn->query($sql)) {
    echo ('创建表成功' . '<br/>');
} else {
    echo ('创建表失败' . $conn->error . '<br/>');
}