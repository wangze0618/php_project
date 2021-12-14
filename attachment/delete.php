<?php
include 'connect.php';

$ids = $_GET['id'];

// 将插入的值设置为UTF8格式
$conn->query('SET NAMES UTF8');

$delete_sql = "DELETE FROM chengji WHERE id = $ids";

if ($conn->query($delete_sql)) {
    echo "<script>alert('删除成功！')</script>";
    header('location:select.php');
} else {
    echo "<script>alert('删除失败！')</script>";
    echo $conn->error;
}