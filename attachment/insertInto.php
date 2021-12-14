<?php
include 'connect.php';
$name = $_POST['xm'];
$number = $_POST['kaohao'];
$score = $_POST['cj'];
$photo = $_POST['photo'];

// 将插入的值设置为UTF8格式
$conn->query('SET NAMES UTF8');

$value_sql = "INSERT INTO chengji 
    VALUES ('','$number','$name','$score','$photo')";

if ($conn->query($value_sql)) {
    echo ("插值成功");
    header('location:select.php');
} else {
    echo ("插值失败");
}