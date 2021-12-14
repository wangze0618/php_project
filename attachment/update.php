<?php
include 'connect.php';

$ids = $_POST['id'];
$xm = $_POST['xm'];
$kaohao = $_POST['kaohao'];
$cj = $_POST['cj'];
$photo = $_POST['photo'];

// 将插入的值设置为UTF8格式
$conn->query('SET NAMES UTF8');

$update_sql = "UPDATE chengji SET id=$ids, kaoshi=$kaohao,xm = '$xm',cj=$cj,zhaopian='$photo' WHERE id = $ids";

if ($conn->query($update_sql)) {
    echo "<script>alert('更新成功！')</script>";
    header('location:select.php');
} else {
    echo "<script>alert('更新失败！')</script>";
    echo $conn->error;
}